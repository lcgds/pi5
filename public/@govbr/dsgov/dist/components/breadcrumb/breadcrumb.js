class BRBreadcrumb {
  constructor(name, component) {
    this.name = name
    this.component = component
    this._setBehavior()
  }

  _setBehavior() {
    this._setView()
    window.addEventListener('resize', () => {
      this._setView()
    })
    window.document.addEventListener('click', (event) => {
      if (
        !this.component.contains(event.target) &&
        this.component.querySelector('.br-card')
      ) {
        this.component.querySelector('.br-card').remove()
      }
    })

    // window.addEventListener('resize', (event) => {})
  }
  /**
   * Reseta a view do breadcrumb
   */
  resetBreadcrumbs() {
    this._reset()

    const brcardBreadcrumb = this.component.querySelector('.br-card')
    if (brcardBreadcrumb !== null) {
      brcardBreadcrumb.remove()
    }
    this._setView()
  }

  _setView() {
    this._reset()
    for (const crumbList of this.component.querySelectorAll('.crumb-list')) {
      const crumbs = crumbList.querySelectorAll('.crumb:not([data-active])')
      if (window.innerWidth < 575) {
        if (crumbs.length !== 1) {
          crumbs.forEach((crumb) => {
            crumb.classList.add('d-none')
          })
          this._insertExpandButton()
        }
      } else {
        if (
          crumbList.scrollWidth > crumbList.offsetWidth ||
          crumbs.length > 5
        ) {
          crumbs.forEach((crumb, index) => {
            if (index > 0 && index < crumbs.length - 1) {
              crumb.classList.add('d-none')
            }
          })
          this._insertExpandButton()
        }
      }
    }
  }

  _insertExpandButton() {
    const crumb = this._createCrumb()
    const crumbList = this.component.querySelector('.crumb-list')
    const crumbs = crumbList.querySelectorAll('.crumb')
    crumbList.insertBefore(crumb, crumbs[1])
  }

  _reset() {
    this.component.querySelectorAll('.crumb-list .crumb').forEach((crumb) => {
      if (crumb.classList.contains('menu-mobil')) {
        crumb.remove()
      } else {
        crumb.classList.remove('d-none')
      }
    })
  }

  _createCrumb() {
    const crumb = document.createElement('li')
    crumb.classList.add('crumb', 'menu-mobil')
    crumb.setAttribute('data-toggle', 'dropdown')

    const button = document.createElement('button')
    button.classList.add('br-button', 'circle')

    const span = document.createElement('span')
    span.classList.add('sr-only')
    span.innerHTML = 'Botão Menu'

    const folderIcon = document.createElement('i')
    folderIcon.classList.add('icon', 'fas', 'fa-folder-plus')

    const chevronIcon = document.createElement('i')
    chevronIcon.classList.add('icon', 'fas', 'fa-chevron-right')

    crumb.appendChild(chevronIcon)
    crumb.appendChild(button)
    button.appendChild(span)
    button.appendChild(folderIcon)

    crumb.addEventListener('click', () => {
      let card = this.component.querySelector('.br-card')
      if (card) {
        folderIcon.classList.remove('icon', 'fas', 'fa-folder-minus')
        folderIcon.classList.add('icon', 'fas', 'fa-folder-plus')
        this.component.querySelector('.br-card').remove()
      } else {
        folderIcon.classList.remove('icon', 'fas', 'fa-folder-plus')
        folderIcon.classList.add('icon', 'fas', 'fa-folder-minus')
        card = this._createList()
        this.component.appendChild(card)
      }
    })

    return crumb
  }

  _createList() {
    const card = document.createElement('div')
    card.classList.add('br-card')

    const front = document.createElement('div')
    front.classList.add('front')

    const content = document.createElement('div')
    content.classList.add('content')

    const list = document.createElement('div')
    list.classList.add('br-list')

    card.appendChild(front)
    front.appendChild(content)
    content.appendChild(list)

    this.component.querySelectorAll('.crumb-list .crumb').forEach((crumb) => {
      if (crumb.classList.contains('d-none')) {
        const item = document.createElement('div')
        item.classList.add('br-item', 'py-3')

        const row = document.createElement('div')
        row.classList.add('row', 'align-items-center')

        const col = document.createElement('div')
        col.classList.add('col')
        if (!crumb.classList.contains('home')) {
          col.appendChild(crumb.querySelector('a').cloneNode(true))
          row.appendChild(col)
          item.appendChild(row)
          list.appendChild(item)
        }
      }
    })

    return card
  }
}

export default BRBreadcrumb
