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
  }

  reset() {}

  update() {
    console.log("update");
  }
}
