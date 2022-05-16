import Checkgroup from '../../partial/js/behavior/checkgroup'

class BRCheckbox {
  constructor(name, component) {
    this.name = name
    this.component = component
    this._setBehavior()
  }

  _setBehavior() {
    this._setCheckgroupBehavior()
  }

  _setCheckgroupBehavior() {
    this.component
      .querySelectorAll('input[type="checkbox"][data-parent]')
      .forEach((trigger) => {
        const checkgroup = new Checkgroup(trigger)
        checkgroup.setBehavior()
      })
  }
}

export default BRCheckbox
