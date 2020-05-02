import Base from "./Base/Controller.es6";
import CommonController from "./Common/Controller.es6";
export default class Controller extends Base {
  constructor() {
    super();
  }

  init() {
    this.name = "UIController";
    new CommonController();
    // this.device = new Device();
    // console.log(this.device.getGPULevel());
  }

  setEvent() {
    super.__setUpdateFlag(false);

    //smoothclick
    $(".medical-contents-icons a").click(e => {
      const id = $(e.currentTarget).attr("href");
      const top = $(id).offset().top;
      // console.log(id, $(id), e);
      const st = {
        top: $(window).scrollTop()
      };

      TweenMax.to(st, 1, {
        top: top - $(".header-scroll").height(),
        onUpdate: e => {
          $(window).scrollTop(st.top);
        }
      });
      return false;
    });
  }

  reset() {}

  update() {
    console.log("update");
  }
}
