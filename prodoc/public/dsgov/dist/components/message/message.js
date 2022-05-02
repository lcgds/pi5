class BRAlert {
  constructor(name, component) {
    this.name = name
    this.component = component
    this._setBehavior()
  }

  _setBehavior() {
    for (const button of this.component.querySelectorAll(
      '.br-message .close'
    )) {
      button.addEventListener('click', () => {
        this._dismiss(this.component)
      })
    }
  }

  _dismiss(component) {
    component.parentNode.removeChild(component)
  }
}

export default BRAlert
