

//////////////////////////////////////product

// 拿api
import apiProducts from './data';

// 入stype
import '../style.scss';

import Product from "../src/Product";

let productList = Product.all(apiProducts);
let products=[];
let total=0;


// 创建页面
let root = document.getElementById('root');
function showList(productList) {
     root.innerHTML = "";
    productList.forEach(product => {
      let card = document.createElement('div');
      let paragraph = document.createElement('p');
      let title = document.createElement('h3');
      let img = document.createElement('img');
  
  
  
      let btn = document.createElement('button');
  
      card.classList.add('postproduit'); 
      btn.classList.add('ajouter'); 
  
      title.innerText = product.name;
      
      img.src = product.image;
  
      paragraph.classList.add('content');
      paragraph.innerText = product.shortDescription();
  
      btn.innerHTML ='<i class="fas fa-shopping-basket"></i>';
    
      //不太明白为什么放在foreach里面
      btn.onclick = () => {

        products.push(product);
        console.log(products);
        document.getElementById("cartQt").innerText=`${products.length} produits`;
        total += Number(product.roundedPrice().toFixed(2));
        document.getElementById("cartPx").innerText=`${total} €`;
      }
  
      
      card.appendChild(img);
      card.appendChild(paragraph);
      card.appendChild(title);
      card.appendChild(btn);
      root.appendChild(card);
    }); 
  }
  showList(productList)


  //////////////////////////////////////panier

  // let listPanier=document.querySelector('#listPanier');
  // let totalPanier=document.querySelector('#totalPanier');

  // totalPanier.innerHTML=`<h3>Détail commande</h3><h3>total produit</h3><p>${products.length}</p><h3>Total</h3><p>${total} €</p>`;
