import Dropdown from '../../partial/js/behavior/dropdown'

/**
 * Classe para o exemplo do comportamento dropdown
 */
class BRAvatar {
  /**
   * Instancia um exemplo de comportamento dropdown
   * @param {object} element - Elemento DOM que representa um componente contento um comportamento de dropdown
   */
  constructor(name, element) {
    this.element = element
    this._setBehavior()
  }

  _setBehavior() {
    this._setDropdownBehavior()
  }

  _setDropdownBehavior() {
    if (this.element.dataset.toggle === 'dropdown') {
      const config = {
        trigger: this.element,
        iconToShow: 'fa-caret-down',
        iconToHide: 'fa-caret-up',
        useIcons: true,
      }
      const dropdown = new Dropdown(config)
      dropdown.setBehavior()
    }
  }
}

export default BRAvatar
