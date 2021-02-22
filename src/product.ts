const DESCRIPTION_SIZE = 100;

export default class Product {
  static all(products: Array<any>) {
    return products.map(p => {
      return new Product(p.name, p.type, p.price, p.description, p.image)
    })
  }
  public name:string;
  private price: number;
  public description: string;
  public image: string;
  public type: string;
  
  constructor(name: string, type: string, price: number, description: string, image: string) {
    this.name= name;
    this.type= type;
    this.price= price;
    this.description = description;
    this.image = this.pathImg(image); // ??  我觉得是在这个pathImg的函数中，引入了image的参数，也就是data中的数值。
  }

  shortDescription() {
    return this.description.substr(0, DESCRIPTION_SIZE) + "...";
  }

  roundedPrice() {
    return Math.round(this.price * 100)/100;
  } //why? the given price is already round...

  private pathImg(imgName: string) {
    return `./imagebio/${imgName}.png`; //imgName vient d'ou? 这是随便造了一个参数吗？应该是data里面的？
  }
}