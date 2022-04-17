class BRTag {
  constructor(name, component) {
    this.name = name
    this.component = component
    this._setBehavior()
  }

  _setBehavior() {
    if (this.component.classList.contains('interaction-select')) {
      // Inicializa selecionado
      if (this.component.querySelector('input').getAttribute('checked')) {
        this.component.classList.add('selected')
      }
      // debugger

      this._setSelection()
    }
    this._closeTag()
  }

  _setSelection() {
    const label = this.component.querySelector('label')
    const input = this.component.querySelector('input')
    const tagRadio = input.getAttribute('type') === 'radio' ? true : false

    label.addEventListener('click', (event) => {
      this._toggleSelection(input, event)
    })
    input.addEventListener('keydown', (event) => {
      if (event.code === 'Space' || event.code === 'Enter') {
        this._toggleSelection(input, event)
      }
    })
  }

  _toggleRadio(input) {
    // debugger
    if (this.component.querySelector('[type="radio"')) {
      const nameTag = input.getAttribute('name')

      for (const tagRadio of window.document.querySelectorAll(
        `[name=${nameTag}]`
      )) {
        this._removeCheck(tagRadio)
      }
    }
  }

  _toggleSelection(input, event) {
    event.preventDefault()
    this._toggleRadio(input)
    if (input.getAttribute('checked')) {
      this._removeCheck(input)
      return
    }

    this._setCheck(input)
  }

  _setCheck(input) {
    input.setAttribute('checked', 'checked')
    input.parentElement.classList.add('selected')
  }

  _removeCheck(input) {
    input.removeAttribute('checked')
    input.parentElement.classList.remove('selected')
  }

  _closeTag() {
    const button = this.component.querySelector('.br-button.close')

    if (button) {
      const brTag = button.closest('.br-tag')

      brTag.addEventListener('click', () => {
        button.closest('.br-tag').remove()
      })
    }
  }
}

const tagList = []
for (const brTag of window.document.querySelectorAll('.br-tag')) {
  tagList.push(new BRTag('br-tab', brTag))
}

export default BRTag
