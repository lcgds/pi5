class BRItem {
  constructor(name, component) {
    this.name = name
    this.component = component
    this._setBehavior()
  }

  _setBehavior() {
    this._setCheckboxSelection()
    this._setRadioSelection()
  }

  _setCheckboxSelection() {
    for (const checkbox of this.component.querySelectorAll(
      '.br-checkbox input[type="checkbox"]'
    )) {
      if (checkbox.checked) {
        this.component.classList.add('selected')
      }
      checkbox.addEventListener('click', (event) => {
        if (event.currentTarget.checked) {
          this.component.classList.add('selected')
        } else {
          this.component.classList.remove('selected')
        }
      })
    }
  }

  _setRadioSelection() {
    for (const radio of this.component.querySelectorAll(
      '.br-radio input[type="radio"]'
    )) {
      if (radio.checked) {
        radio.setAttribute('checked', '')
        this.component.classList.add('selected')
      }
      radio.addEventListener('click', (event) => {
        for (const item of this.component.parentElement.querySelectorAll(
          '.br-item'
        )) {
          for (const radioItem of item.querySelectorAll(
            '.br-radio input[type="radio"]'
          )) {
            if (radioItem === event.currentTarget) {
              radioItem.setAttribute('checked', '')
              item.classList.add('selected')
            } else {
              radioItem.removeAttribute('checked')
              item.classList.remove('selected')
            }
          }
        }
      })
    }
  }
}

export default BRItem
