import { createPopper } from '@popperjs/core'
// import 'tippy.js/dist/tippy.css' // optional for styling
class Tooltip {
  /**
   * Instancia um comportamento Tooltip
   * @param {object} - Objeto de configuração inicial para destructuring
   * @property {object} activator - Elemento DOM que representa o acionador do comportmento tooltip
   * @property {string} place - Local onde vai aparecer o tooltip
   * @property {string} timer - Tempo em que vai aparecer o tooltip
   * @property {string} placement - Local onde vai aparecer o tooltip
   */
  // eslint-disable-next-line complexity
  constructor({
    component,
    activator,
    place = 'top',
    timer,
    active,
    placement = 'top',
    textTooltip,
    type = 'info',
  }) {
    const text_tooltip = textTooltip ? textTooltip : component

    this.activator = activator
    this.component = component
      ? component
      : this._setContent(text_tooltip, type)

    this.place =
      this.component.getAttribute('place') === null
        ? this.component.getAttribute('place')
        : 'top'
    const positions = ['top', 'right', 'bottom', 'left']
    this.popover = this.component.hasAttribute('popover')
    this.notification = this.component.classList.contains('br-notification')
    this.timer = this.component.getAttribute('timer')
      ? this.component.getAttribute('timer')
      : timer
    this.active = this.component.hasAttribute('active')
    this.placement = positions.includes(place)
      ? place
      : this.notification
      ? 'bottom'
      : 'top'
    this.popperInstance = null
    this.showEvents = ['mouseenter', 'click', 'focus']
    this.hideEvents = ['mouseleave', 'blur']
    this.closeTimer = null
    this._create()
    this._setBehavior()
  }

  _setBehavior() {
    // Ação de abrir padrao ao entrar no ativador
    if (this.activator) {
      this.showEvents.forEach((event) => {
        this.activator.addEventListener(event, (otherEvent) => {
          this._show(otherEvent)
        })
      })
    }
    // Adiciona ação de fechar ao botao do popover
    // if (this.popover || this.notification) {
    if (this.popover) {
      const closeBtn = this.component.querySelector('.close')
      closeBtn.addEventListener('click', (event) => {
        this._hide(event, this.component)
        this._toggleActivatorIcon()
      })
      // Ação de fechar padrao ao sair do ativador
    } else {
      this.hideEvents.forEach((event) => {
        this.activator.addEventListener(event, (otherEvent) => {
          this._hide(otherEvent, this.component)
        })
      })
    }
  }
  /**
   * Seta o conteudo do tooltip
   * @param {*} contentText
   * @returns  - retorna o objeto com tooltip
   */
  _setContent(contentText, type) {
    const text_tooltip = document.createElement('div')
    text_tooltip.setAttribute('role', 'tooltip')
    text_tooltip.setAttribute('place', 'top')
    text_tooltip.setAttribute(type, type)
    text_tooltip.innerText = `${contentText}`
    text_tooltip.classList.add('br-tooltip')
    text_tooltip.classList.add('sample')
    if (this.activator) {
      // this.activator.parentElement.parentElement.parentElement.appendChild(
      // text_tooltip
      // )
    }
    document.body.appendChild(text_tooltip)

    return text_tooltip
  }

  /* Cria a instancia do popper*/
  _create() {
    this._setLayout()

    if (this.notification) {
      this.component.setAttribute('notification', '')
      this.popperInstance = createPopper(this.activator, this.component, {
        modifiers: [
          {
            name: 'offset',
            options: {
              offset: [0, 8],
            },
          },
          {
            name: 'preventOverflow',
            options: {
              altAxis: false, // false by default
              mainAxis: true, // true by default
            },
          },
        ],
        // placement: this.placement,
        placement: 'bottom',
        strategy: 'fixed',
      })
    } else {
      const ac = this.activator.getBoundingClientRect()
      const tt = this.component.getBoundingClientRect()
      const bw = document.body.clientWidth

      if (this.placement === 'right') {
        this.placement =
          ac.x + ac.width + tt.width > bw ? 'top' : this.placement
      }
      if (this.placement === 'left') {
        this.placement = ac.x - tt.width > 0 ? this.placement : 'top'
      }

      this.popperInstance = createPopper(this.activator, this.component, {
        modifiers: [
          {
            name: 'offset',
            options: {
              offset: [0, 8],
            },
          },
          {
            name: 'preventOverflow',
            options: {
              altAxis: true, // false by default
              // boundary: 'body',
              mainAxis: true, // true by default
              // rootBoundary: 'document',
              tether: false, // true by default
            },
          },
        ],
        placement: this.placement,
      })
    }
  }

  _show(event) {
    this.component.style.display = 'unset'
    this.component.setAttribute('data-show', '')
    this.component.style.zIndex = 9999
    this._fixPosition()
    // Importante pois "display: none" conflitua com a instancia do componente e precisa ser setado aqui já que pelo css ativa o efeito fade no primeiro carregamento
    this.component.style.visibility = 'visible'
    if (this.timer) {
      clearTimeout(this.closeTimer)
      this.closeTimer = setTimeout(
        this._hide,
        this.timer,
        event,
        this.component
      )
    }
  }
  /**
   * Esconde o componente
   */
  _hide(event, component) {
    component.removeAttribute('data-show')
    component.style.zIndex = -1
    component.style.visibility = 'hidden'
    clearTimeout(component.closeTimer)
  }

  _setLayout() {
    // Cria a setinha que aponta para o item que criou o tooltip
    const arrow = document.createElement('div')
    arrow.setAttribute('data-popper-arrow', '')

    if (this.component.querySelectorAll('.arrow').length < 1) {
      arrow.classList.add('arrow')
    }
    this.component.appendChild(arrow)
    // Cria o icone de fechar do po over
    if (this.popover) {
      const close = document.createElement('button')
      close.setAttribute('type', 'button')
      close.classList.add('close')
      const ico = document.createElement('i')
      ico.classList.add('fas', 'fa-times')
      close.appendChild(ico)
      this.component.appendChild(close)
    }
  }

  _toggleActivatorIcon() {
    const icon = this.activator.querySelector('button svg')
    if (icon) {
      icon.classList.toggle('fa-angle-down')
      icon.classList.toggle('fa-angle-up')
    }
    this.activator.toggleAttribute('active')
  }

  _fixPosition() {
    if (this.notification) {
      setTimeout(() => {
        const ac = this.activator.getBoundingClientRect()

        this.component.style = `position: fixed !important; top: ${
          ac.top + ac.height + 10
        }px !important; left: auto; right: 8px; display: unset; bottom: auto;`
        this.component.querySelector(
          '.arrow'
        ).style = `position: absolute; left: auto; right: ${
          document.body.clientWidth - ac.right + ac.width / 5
        }px !important;`
      }, 100)
    }
    // debugger
  }
}

export default Tooltip
