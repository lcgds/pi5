import Tooltip from '../../partial/js/behavior/tooltip'
class BRNotification {
  constructor(name, component) {
    this.name = name
    this.component = component
    this.menuBtns = component.querySelectorAll('.contextual-btn')
    this.hideEvents = ['mouseleave', 'blur']
    this._setBehavior()
  }

  _hideNotification(action) {
    const notification = action.parentNode.parentNode
    notification.setAttribute('hidden', '')
  }

  _hideAllNotifications(action) {
    const notifications =
      action.parentNode.parentNode.parentNode.querySelectorAll('.br-item')
    notifications.forEach((notification) => {
      notification.setAttribute('hidden', '')
    })
  }

  _setBehavior() {
    for (const button of this.component.querySelectorAll(
      '.br-notification .close'
    )) {
      button.addEventListener('click', () => {
        this._dismiss(this.component)
      })
    }
    this._notificationTooltip()
  }

  _notificationTooltip() {
    const TooltipExampleList = []

    window.document
      .querySelectorAll(':not(.br-header) .notification-tooltip')
      .forEach((TooltipNotification) => {
        const texttooltip =
          TooltipNotification.getAttribute('data-tooltip-text')
        const config = {
          activator: TooltipNotification,
          placement: 'top',
          textTooltip: texttooltip,
        }
        for (
          parent = TooltipNotification.parentNode;
          parent;
          parent = parent.parentNode
        ) {
          if (parent.classList)
            if (parent.classList.contains('header-avatar')) {
              return ''
            }
        }
        TooltipExampleList.push(new Tooltip(config))
        return ''
      })
  }

  _dismiss(component) {
    component.classList.add('close')
  }
}

export default BRNotification
