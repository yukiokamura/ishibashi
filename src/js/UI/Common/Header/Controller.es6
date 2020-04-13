import Base from "../../Base/Controller.es6";
// import Device from './Util/Device/Controller.es6';
export default class Controller extends Base {
  constructor() {
    super();
  }

  init() {
    this.name = "HeaderController";
    this.headerShow();
    // this.device = new Device();
    // console.log(this.device.getGPULevel());
  }

  setEvent() {
    super.__setUpdateFlag(false);
    $(window).on("scroll", e => {
      this.headerShow();
    });
  }

  headerShow() {
    const st = $(window).scrollTop();
    const $header = $("header");
    if ($header.height() < st) {
      $(".header-scroll").addClass("active");
    } else {
      $(".header-scroll").removeClass("active");
    }
  }

  reset() {}

  update() {
    console.log("update");
  }
}
