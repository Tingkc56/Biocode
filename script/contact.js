
/////////////////////////////////////////////Contact


  // ---------------------------------envoyer les messages via slack-----------------------------

  document.getElementById("envoie").addEventListener('click',()=> {
    var textNom = document.getElementById("nom").value; 
    console.log(textNom);
    var textMail = document.getElementById("mail").value; 
    console.log(textMail);
    var textSujet = document.getElementById("sujet").value; 
    var textMessage = document.getElementById("message").value;
  
    fetch('https://slack.com/api/chat.postMessage',{
        method: 'POST', 
        headers: new Headers({
            'Content-Type': 'application/json',
            'Authorization': 'Bearer xoxb-1639577899874-1690926904081-ezeFLV2occ6Nd5SCtIz4cw9g',
        }),
        body: JSON.stringify({channel:"C01KY8DK3DG", text:`Nom: ${textNom}\n Email: ${textMail}\n Sujet: ${textSujet}\n Message: ${textMessage}`}), 
  })
  });
  
  
  
  //---------------------------------------------adress autocompleter----------------------------------
  
  
  //找出address的容器，并且赋值id
  var addressContainer = document.querySelectorAll('#listContact p')[2];
  console.log(addressContainer);
  addressContainer.id = "addressContainer";
  let address = document.querySelector('#address')
  
  address.addEventListener('input',function(){
     let addressUrl = address.value.split(" ").join('+');
     console.log(addressUrl);  
  
    // fetch之前先把显示参考地址的下拉菜单清空
     delectListBox(); 
    // 实行fetch
     fetch(`https://api-adresse.data.gouv.fr/search/?q=${addressUrl}&limit=6`)
     .then(Response => Response.json())
     .then(data=>{
    //先给上面那个url返回来的数据列表赋值
        let listApi = data.features;
    //给所有地址列表创建一个容器，之所以要在foreach外面因为只需要创建一个容器就可以了
        let listBox = document.createElement('ul');
        listBox.id = 'addressBox';
        addressContainer.appendChild(listBox);
  
        listApi.forEach((feature, index)=> {
            //在foreach里面创建列表，出来一个数据就会加一个列表进到上面的容器里，加用appendChild，放在最后用
            let addressList = document.createElement('li');
            addressList.innerHTML = listApi[index].properties.label;
          console.log(listApi[index].properties.label)
            //如果点击下拉菜单中的一个地址，则把这个地址填入input
          addressList.addEventListener("click", function(e) {
            address.value = listApi[index].properties.label;
            // a revoir 例子里面用到了callback，但是我不用也可以用，这里的callback是什么意思需要去看一下？？
            // callback(listApi[index]);
  
            /* 关掉窗口: */
            delectListBox();
          });

          listBox.appendChild(addressList);
        });//到这里为止，已经出现了地址下拉列表，但是我每打一个字，他都会出一个表，然后积累起来，所以每次加入新列表之前，需要把旧的列表清除
     })
     .catch(e => console.log("Oops, error", e));
  });
    // 这个函数用来清除box，但是因为需要用到在前面给box新加的id=addressbox，所以需要放在他后面
    function delectListBox() {
         var addressBox = document.getElementById("addressBox");
         console.log(addressBox);
      if (addressBox){
        addressBox.parentElement.removeChild(addressBox)
      }
    }
  
  
  
  