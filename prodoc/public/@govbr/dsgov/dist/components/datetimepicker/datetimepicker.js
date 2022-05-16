import flatpickr from 'flatpickr'
const Brazilian = require('flatpickr/dist/l10n/pt').default.pt

class BRDateTimePicker {
  constructor(name, component) {
    this.name = name
    this.component = component
    // localization global
    flatpickr.localize(Brazilian)

    this._buildDateTimePicker()
  }

  _buildDateTimePicker() {
    let format = 'd/m/Y'
    let time = false
    let noCalendar = false
    switch (this.component.getAttribute('data-type')) {
      case 'date':
        format = 'd/m/Y'
        time = false
        noCalendar = false
        break
      case 'time':
        format = 'H:i'
        time = true
        noCalendar = true
        break
      case 'datetime-local':
        format = 'd/m/Y H:i'
        time = true
        noCalendar = false
        break
      default:
        format = 'd/m/Y'
        time = false
        noCalendar = false
        break
    }

    const config = {
      dateFormat: format,
      enableTime: time,
      minDate: '2020-01',
      minuteIncrement: 1,
      mode: this.component.getAttribute('data-mode'),
      nextArrow:
        '<button class="br-button circle small" type="button"><i class="fas fa-angle-right"></i></button>',
      noCalendar: noCalendar,
      prevArrow:
        '<button class="br-button circle small" type="button"><i class="fas fas fa-angle-left"></i></button>',
      time_24hr: true,
      wrap: true,
      disableMobile: 'true',
    }

    flatpickr(this.component, config)
  }
}

export default BRDateTimePicker
