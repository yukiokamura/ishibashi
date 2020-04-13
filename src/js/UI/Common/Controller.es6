import Base from "../Base/Controller.es6";
import HeaderController from "./Header/Controller.es6";
export default class Controller extends Base {
  constructor() {
    super();
  }

  init() {
    this.name = "CommonController";
    this.header = new HeaderController();
  }

  setEvent() {
    super.__setUpdateFlag(false);
  }

  reset() {}

  update() {
    console.log("update");
  }
}
