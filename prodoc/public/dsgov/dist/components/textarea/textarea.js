class BRTextArea {
  constructor(name, component) {
    this.name = name
    this.component = component
    this._setBehavior()
    this._setKeyup()
  }

  _setBehavior() {
    this.limit = this.component.querySelector('.limit')
    this.current = this.component.querySelector('.current')
    if (this.component.querySelector('textarea') !== null) {
      this.maximum = this.component
        .querySelector('textarea')
        .getAttribute('maxlength')
    }

    this.characters = this.component.querySelector('.characters')
    this.currentValue = this.component.querySelector('.current')
  }

  _setKeyup() {
    this.component.addEventListener('keyup', (event) => {
      const characterCount = this.component.querySelector('textarea').textLength
      if (characterCount <= this.maximum && !this.characters) {
        this.limit.innerHTML = ''
        this.currentValue.innerHTML = `Restam <strong>${
          this.maximum - characterCount
        }</strong> caracteres`
      }
      // Com limite de caracteres
      if (!this.characters) {
        if (characterCount === 0 && this.limit.innerHTML === '') {
          this.limit.innerHTML = `Limite máximo de <strong>${this.maximum}</strong> caracteres`
          this.currentValue.innerHTML = ''
        }
      }
      // Sem limite de caracteres
      else {
        this.characters.innerHTML = `<strong>${characterCount}</strong> caracteres digitados`
      }
    })
  }
}

export default BRTextArea
