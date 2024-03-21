(function($) {
    "use strict";
  
    class Calendar {
      constructor(selector, options) {
        this.selector = selector;
        this.options = options;
        this.today = new Date();
        this.year = this.today.getFullYear();
        this.month = this.today.getMonth();
        this.monthTag = [
          "January", "February", "March", "April", "May", "June",
          "July", "August", "September", "October", "November", "December"
        ];
        this.day = this.today.getDate();
        this.selectedDay = null;
        this.setDate = null;
        this.days = document.querySelectorAll(`${selector} .td-calendar`);
        this.daysLen = this.days.length;
  
        this.initialize();
      }
  
      initialize() {
        this.draw();
      }
  
      draw() {
        this.getCookie('selected_day');
        this.drawDays();
        const that = this;
  
        document.querySelector('.pre-button').addEventListener('click', function() {
          that.preMonth();
        });
  
        document.querySelector('.next-button').addEventListener('click', function() {
          that.nextMonth();
        });
  
        document.querySelector('#reset').addEventListener('click', function() {
          that.reset();
        });
  
        this.days.forEach(day => {
          day.addEventListener('click', function() {
            that.clickDay(this);
          });
        });
      }
  
      drawHeader(e) {
        const headDay = document.querySelector('.head-day');
        const headMonth = document.querySelector('.head-month');
  
        e ? headDay.innerHTML = e : headDay.innerHTML = this.day;
        headMonth.innerHTML = `${this.monthTag[this.month]} - ${this.year}`;
      }
  
      drawDays() {
        const startDay = new Date(this.year, this.month, 1).getDay();
        const nDays = new Date(this.year, this.month + 1, 0).getDate();
        let n = startDay;
  
        for (let k = 0; k < 42; k++) {
          this.days[k].innerHTML = '';
          this.days[k].id = '';
          this.days[k].classList.remove('selected', 'today');
        }
  
        for (let i = 1; i <= nDays; i++) {
          this.days[n].innerHTML = i;
          n++;
        }
  
        for (let j = 0; j < 42; j++) {
          if (this.days[j].innerHTML === "") {
            this.days[j].id = "disabled";
          } else if (j === this.day + startDay - 1) {
            if ((this.options && (this.month === this.setDate.getMonth()) && (this.year === this.setDate.getFullYear())) || (!this.options && (this.month === this.today.getMonth()) && (this.year === this.today.getFullYear()))) {
              this.drawHeader(this.day);
              this.days[j].id = "today";
            }
          }
  
          if (this.selectedDay) {
            if ((j === this.selectedDay.getDate() + startDay - 1) && (this.month === this.selectedDay.getMonth()) && (this.year === this.selectedDay.getFullYear())) {
              this.days[j].classList.add("selected");
              this.drawHeader(this.selectedDay.getDate());
            }
          }
        }
      }
  
      clickDay(o) {
        const selected = document.querySelector(".selected");
  
        if (selected) {
          selected.classList.remove("selected");
        }
  
        o.classList.add("selected");
        this.selectedDay = new Date(this.year, this.month, o.innerHTML);
        this.drawHeader(o.innerHTML);
        this.setCookie('selected_day', 1);
      }
  
      preMonth() {
        if (this.month < 1) {
          this.month = 11;
          this.year = this.year - 1;
        } else {
          this.month = this.month - 1;
        }
  
        this.drawHeader(1);
        this.drawDays();
      }
  
      nextMonth() {
        if (this.month >= 11) {
          this.month = 0;
          this.year = this.year + 1;
        } else {
          this.month = this.month + 1;
        }
  
        this.drawHeader(1);
        this.drawDays();
      }
  
      getOptions() {
        if (this.options) {
          const sets = this.options.split('-');
          this.setDate = new Date(sets[0], sets[1] - 1, sets[2]);
          this.day = this.setDate.getDate();
          this.year = this.setDate.getFullYear();
          this.month = this.setDate.getMonth();
        }
      }
  
      reset() {
        this.month = this.today.getMonth();
        this.year = this.today.getFullYear();
        this.day = this.today.getDate();
        this.options = undefined;
        this.drawDays();
      }
  
      setCookie(name, expiredays) {
        if (expiredays) {
          const date = new Date();
          date.setTime(date.getTime() + (expiredays * 24 * 60 * 60 * 1000));
          const expires = `; expires=${date.toGMTString()}`;
          document.cookie = `${name}=${this.selectedDay}${expires}; path=/`;
        } else {
          const expires = "";
          document.cookie = `${name}=${this.selectedDay}${expires}; path=/`;
        }
      }
  
      getCookie(name) {
        if (document.cookie.length) {
          const arrCookie = document.cookie.split(';');
          const nameEQ = `${name}=`;
  
          for (let i = 0, cLen = arrCookie.length; i < cLen; i++) {
            const c = arrCookie[i];
  
            while (c.charAt(0) === ' ') {
              c = c.substring(1, c.length);
            }
  
            if (c.indexOf(nameEQ) === 0) {
              this.selectedDay = new Date(c.substring(nameEQ.length, c.length));
            }
          }
        }
      }
    }
  
    const calendar = new Calendar('#calendar');
  
  })(jQuery);
  