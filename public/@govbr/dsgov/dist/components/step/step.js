class BRStep {
  constructor(name, component) {
    /**
     * Instancia um componente carousel
     * @param {string} name - Component name
     * @param {object} component - DOM root Object reference
     * @property {number} activeStepNum - Número do palco ativo
     * @property {array} DOMStrings - instancia dos elementos internos do componente
     */
    this.name = name
    this.component = component
    this.activeStepNum = 0
    // DOM elements
    this.DOMstrings = {
      stepsBarClass: 'step-progress',
      stepsBar: this.component.querySelector('.step-progress'),
      stepsBtnClass: 'step-progress-btn',
      stepsBtns: this.component.querySelectorAll('.step-progress-btn'),
    }

    /**
     * Remove class from a set of items
     * @param {object} elemSet - Elelment's List
     * @param {string} button - Attribute name
     */
    this.removeAttributes = (elemSet, attrName) => {
      elemSet.forEach((elem) => {
        elem.removeAttribute(attrName)
      })
    }

    /**
     * Return exect parent node of the element
     * @param {object} elem - element
     * @param {string} button - father's class
     */
    this.findParent = (elem, parentClass) => {
      let currentNode = elem
      while (!currentNode.classList.contains(parentClass)) {
        currentNode = currentNode.parentNode
      }
      return currentNode
    }

    /** get active button step number
     * @param {object} elem - element
     */
    this.getActiveStep = (elem) => {
      return Array.from(this.DOMstrings.stepsBtns).indexOf(elem)
    }

    /** Set all steps before clicked (and clicked too) to active
     * @param {number} num - step number
     */
    this.setActiveStep = function (num) {
      // remove active state from all the state
      this.removeAttributes(this.DOMstrings.stepsBtns, 'active')
      // this.removeAttributes(this.DOMstrings.stepsBtns, 'disabled')

      // set picked items to active
      this.DOMstrings.stepsBtns.forEach((elem, index) => {
        if (index === num) {
          elem.removeAttribute('disabled')
          elem.setAttribute('active', '')
        }
      })
      this.activeStepNum = num
    }

    /**
     * Prints numbers labels into steps
     */
    this.setStepsNum = () => {
      this.DOMstrings.stepsBtns.forEach((elem, index) => {
        const img = elem.querySelector('.step-icon')
        const text = this.component.getAttribute('data-type') === 'text'
        if (text) {
          elem.setAttribute(
            'step-num',
            `${index + 1}/${this.DOMstrings.stepsBtns.length}`
          )
        } else if (img) {
          elem.setAttribute('step-num', '')
        } else elem.setAttribute('step-num', index + 1)
      })
    }

    /** Filters active step into range
     * @param {number} num - step number
     */
    this.setStep = (num) => {
      const activeStep = num <= this.DOMstrings.stepsBtns.length ? num - 1 : 0
      this.setActiveStep(activeStep)
    }

    this._setBehavior()
  }

  /**
   * Set component behaviors
   * @private
   */
  _setBehavior() {
    // STEPS BAR CLICK FUNCTION
    this.DOMstrings.stepsBar.addEventListener('click', (e) => {
      // check if click target is a step button
      const eventTarget = e.target
      if (!eventTarget.classList.contains(`${this.DOMstrings.stepsBtnClass}`)) {
        e.target.parentNode.click()
        return
      }
      // get active button step number
      const activeStepNum = this.getActiveStep(eventTarget)
      // set all steps before clicked (and clicked too) to active
      this.setActiveStep(activeStepNum)
    })

    // Set Steps label number
    this.setStepsNum()
    // Set default active step
    if (this.component.hasAttribute('data-initial')) {
      this.setStep(this.component.getAttribute('data-initial'))
    } else this.setStep(1)

    // set steps buttons grid style if it needs to scroll horizontaly
    if (
      !this.component.classList.contains('vertical') &&
      !this.component.hasAttribute('data-scroll')
    ) {
      const stepsWidth =
        Math.round(100 / this.DOMstrings.stepsBtns.length) - 0.5
      // this.DOMstrings.stepsBar.style.gridTemplateColumns = `repeat(auto-fit, minmax(100px, ${stepsWidth}% ))`
    }
  }
}

export default BRStep
