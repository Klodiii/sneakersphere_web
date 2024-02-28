const wrapper = document.querySelector(".sliderwrapper");
const menuitems = document.querySelectorAll(".menuitem");


menuitems.forEach((item,index) => {
    item.addEventListener("click", () => {
        wrapper.style.transform = `translateX(${-100 * index}vw)`;
        choosenProduct = products[index]
        currentProductTitle.textContent = choosenProduct.title;
        currentProductPrice.textContent = "₱" + choosenProduct.price;
        currentProductDesc.textContent = choosenProduct.desc;
        currentProductSizes.textContent = choosenProduct.size;
        currentProductImg.src = choosenProduct.colors[0].img;
        currentProductColors.forEach((color, index) => {
            color.style.backgroundColor = choosenProduct.colors[index].code;
        });
    });
});

const products = [
    {
      id: 1,
      title: "Air Jordan 1",
      desc: "Air Jordan is a line of basketball shoes produced by Nike, Inc. Related apparel and accessories are marketed under Jordan Brand. The silhouette of Michael Jordan served as inspiration to create the Jumpman logo.",
      price: "6,150",
      colors: [
        {
          code: "red",
          img: "frontendimg/img/jordan1.png",
        },
        {
          code: "blue",
          img: "frontendimg/img/jordan2.png",
        },
      ],
    },
    {
      id: 2,
      title: "Aura New Season",
      desc: "The lightweight cushioning found in this next generation basketball shoe takes cues from its predecessors.", 
      price:  "7,270",
      colors: [
        {
          code: "green",
          img: "frontendimg/img/aura1.png",
        },
        {
          code: "white",
          img: "frontendimg/img/aura2.png",
        },
      ],
    },
    {
      id: 3,
      title: "Air Force 1",
      desc: "It was created by designer Bruce Kilgore and was the first basketball shoe to use Nike's Air technology. The shoe is offered in low-, mid- and high-top styles.",
      price: "6,400", 
      colors: [
        {
          code: "white",
          img: "frontendimg/img/airforce1.png",
        },
        {
          code: "black",
          img: "frontendimg/img/airforce2.png",
        },
      ],
    },
    {
      id: 4,
      title: "Blazer New Season",
      desc: "The Nike Blazer is a sneaker manufactured by Nike. It was originally released in 1973 as a basketball shoe. ", 
      price: "4,700",
      colors: [
        {
          code: "white",
          img: "frontendimg/img/blazer1.png",
        },
        {
          code: "red",
          img: "frontendimg/img/blazer2.png",
        },
      ],
    },
    {
      id: 5,
      title: "Tatum New Season",
      desc: "The shoe features a lightweight frame wrapped in foam and a forefoot Zoom Air unit, providing comfort and responsiveness without sacrificing court feel.", 
      price: "6,700",
      colors: [
        {
          code: "black",
          img: "frontendimg/img/tatum1.png",
        },
        {
          code: "white",
          img: "frontendimg/img/tatum2.png",
        },
      ],
    },
  ];

  let choosenProduct = products[0];
  const currentProductImg = document.querySelector(".productimg");
  const currentProductTitle = document.querySelector(".producttitle");
  const currentProductPrice = document.querySelector(".productprice");
  const currentProductDesc = document.querySelector(".productdesc");
  const currentProductColors = document.querySelectorAll(".color");
  const currentProductSizes = document.querySelectorAll(".size");
  const productButton = document.querySelector(".productbutton");


  currentProductColors.forEach((color, index) => {
    color.addEventListener("click", () => {
      currentProductImg.src = choosenProduct.colors[index].img;
    });
  });

  currentProductSizes.forEach((size, index) => {
      size.addEventListener("click", () => {
        currentProductSizes.forEach((size) => {
        size.style.backgroundColor = "white";
        size.style.color = "black";
      });
      size.style.backgroundColor = "black";
      size.style.color = "white";
    });
  });

 


  







