import Base from "../../Base/Controller.es6";
// import Device from './Util/Device/Controller.es6';
export default class Controller extends Base {
  constructor() {
    super();
  }

  init() {
    this.name = "HeaderController";
    this.headerShow();
    this.is_menu = false;
    // this.device = new Device();
    // console.log(this.device.getGPULevel());
  }

  setEvent() {
    super.__setUpdateFlag(false);
    $(window).on("scroll", e => {
      this.headerShow();
    });

    $(".header-scroll-menuBtn").on("click", e => {
      this.is_menu = !this.is_menu;
      if (this.is_menu) this.menuShow();
      else this.menuHide();
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

  menuShow() {
    const tl = new TimelineMax();
    tl.add(e => {
      $(".header-scroll").addClass("motionNow");
    });
    $(".header-scroll-menuBtn-open span").each((i, e) => {
      tl.to(
        e,
        0.2,
        {
          scaleX: 0
        },
        i * 0.1
      );
    });
    tl.add(e => {
      $(".header-scroll-menu").addClass("active");
    });
    $(".header-scroll-menuBtn-close span").each((i, e) => {
      tl.set(
        e,
        {
          rotation: i == 0 ? -45 : 45
        },
        0
      ).to(
        e,
        0.2,
        {
          scaleX: 1
        },
        i * 0.1 + 0.4
      );
    });
    tl.eventCallback("onComplete", e => {
      $(".header-scroll").removeClass("motionNow");
    });
  }

  menuHide() {
    const tl = new TimelineMax();
    tl.add(e => {
      $(".header-scroll").addClass("motionNow");
      $(".header-scroll-menu").removeClass("active");
    });
    $(".header-scroll-menuBtn-close span").each((i, e) => {
      tl.to(
        e,
        0.2,
        {
          scaleX: 0
        },
        i * 0.1
      );
    });
    $(".header-scroll-menuBtn-open span").each((i, e) => {
      tl.to(
        e,
        0.2,
        {
          scaleX: 1
        },
        i * 0.1 + 0.2
      );
    });
    tl.eventCallback("onComplete", e => {
      $(".header-scroll").removeClass("motionNow");
    });
  }

  reset() {}

  update() {
    console.log("update");
  }
}
