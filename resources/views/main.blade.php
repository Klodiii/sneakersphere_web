<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('cssfile/style.css')}}">
    <title>Sneakersphere</title>
</head>
<body>
    <nav id="nav">
        <div class="navtop">
            <div class="navitem">
                <h1>Sneakersphere</h1>
            </div>
        <div class="navitem">
                <span  class="limitedoffer">
                    University Edition!
                </span>
        </div>
        </div>
        <div class="navbottom">
            <h3 class="menuitem">Air Jordan</h3>
            <h3 class="menuitem">Aura</h3>
            <h3 class="menuitem">Nike Air Force</h3>
            <h3 class="menuitem">Blazer</h3>
            <h3 class="menuitem">Tatum</h3>
        </div>
        </nav>
        <div class="slider">
            <div class="sliderwrapper">
             <div class="slideritem">
                 <img src="{{asset('frontendimg/img/jordan1.png')}}" alt="" class="sliderimg">
                 <div class="sliderbg"></div>
                 <h1 class="slidertitle">AIR JORDAN 1</h1>
                 <h2 class="sliderprice">₱6,150</h2>
                 <a href="#product">
                     <button class="buybutton">BUY NOW</button>
                 </a>
             </div>
             <div class="slideritem">
                 <img src="{{asset('frontendimg/img/aura1.png')}}" alt="" class="sliderimg">
                 <div class="sliderbg"></div>
                 <h1 class="slidertitle">AURA NEW SEASON</h1>
                 <h2 class="sliderprice">₱7,270</h2>
                 <a href="#product">
                     <button class="buybutton">BUY NOW</button>
                 </a>
             </div>
             <div class="slideritem">
                 <img src="{{asset('frontendimg/img/airforce1.png')}}" alt="" class="sliderimg">
                 <div class="sliderbg"></div>
                 <h1 class="slidertitle">AIR FORCE 1</h1>
                 <h2 class="sliderprice">₱6,400</h2>
                 <a href="#product">
                     <button class="buybutton">BUY NOW</button>
                 </a>
             </div>
             <div class="slideritem">
                 <img src="{{asset('frontendimg/img/blazer1.png')}}" alt="" class="sliderimg">
                 <div class="sliderbg"></div>
                 <h1 class="slidertitle">BLAZER NEW SEASON</h1>
                 <h2 class="sliderprice">₱4,700</h2>
                 <a href="#product">
                     <button class="buybutton">BUY NOW</button>
                 </a>
             </div>
             <div class="slideritem">
                 <img src="{{asset('frontendimg/img/tatum1.png')}}" alt="" class="sliderimg">
                 <div class="sliderbg"></div>
                 <h1 class="slidertitle">TATUM NEW SEASON</h1>
                 <h2 class="sliderprice">₱6,700</h2>
                 <a href="#product">
                     <button class="buybutton">BUY NOW</button>
                 </a>
             </div>
            </div>
         </div>
        <div class="features">
            <div class="feature">
                <img src="{{asset('frontendimg/img/shipping.png')}}" alt="" class="featureicon">
                <span class="featuretitle">FREE SHIPPING</span>
                <span class="featuredesc">Free worldwide shipping on all orders.</span>
            </div>
            <div class="feature">
                    <img src="{{asset('frontendimg/img/return.png')}}" alt="" class="featureicon">
                    <span class="featuretitle">30 DAYS RETURN</span>
                    <span class="featuredesc">Return and easy refund in 14 days.</span>
            </div>
            <div class="feature">
                    <img src="{{asset('frontendimg/img/gift.png')}}" alt="" class="featureicon">
                    <span class="featuretitle">GIFT CARDS</span>
                    <span class="featuredesc">Buy gift cards and use coupon codes easily.</span>
            </div>
            <div class="feature">
                    <img src="{{asset('frontendimg/img/contact.png')}}" alt="" class="featureicon">
                    <span class="featuretitle">CONTACT US</span>
                    <span class="featuredesc">Keep in touch via email and support system.</span>
            </div>
        </div>

        <div class="product" id="product">
            <img src="{{asset('frontendimg/img/jordan1.png')}}" alt="" class="productimg" height="1000" width="1000">
            <div class="productdetails">
                <h1 class="producttitle">AIR JORDAN 1</h1>
                <h2 class="productprice">₱6,150</h2>
                <p class="productdesc">Air Jordan is a line of basketball shoes produced by Nike, Inc. Related apparel and accessories are marketed under Jordan Brand. The silhouette of Michael Jordan served as inspiration to create the Jumpman logo.</p>
                <div class="colors">
                    <div class="color"></div>
                    <div class="color"></div>
                </div>
                <a href="{{route('home')}}">
                    <button class="productbutton">BUY NOW</button>
                </a>
            </div>
    </div>
    <div class="gallery" id="gallery">
        <div class="galleryitem">
            <h1 class="gallerytitle">Be Yourself!</h1>
            <img src="https://images.unsplash.com/photo-1612821745127-53855be9cbd1?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="galleryimg">
        </div>
        <div class="galleryitem">
            <img src="https://images.unsplash.com/photo-1646747859549-56d6c2ee3e6e?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="galleryimg">
            <h1 class="gallerytitle">Just Do It!</h1>
        </div>
        <div class="galleryitem">
            <h1 class="gallerytitle">Make It Happen!</h1>
            <img src="https://images.unsplash.com/photo-1588117260148-b47818741c74?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="galleryimg">
        </div>
    </div>
       
      
    <div class="newseason">
        <div class="nsitem">
            <img src="https://images.unsplash.com/photo-1618453292507-4959ece6429e?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDR8fG5pa2V8ZW58MHx8MHx8fDA%3D" alt="" class="nsimg">
        </div>
        <div class="nsitem">
            <h3 class="nstitlesm">New Arrivals</h3>
            <h1 class="nstitle">New Season</h1>
            <h1 class="nstitle">New Collections</h1>
            <a href="#nav">
                <button class="nsbutton">CHOOSE YOUR STYLE!</button>
            </a>
        </div>
        <div class="nsitem">
            <img src="https://images.unsplash.com/photo-1618453292484-6c490547839d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDF8fHxlbnwwfHx8fHw%3D" alt="" class="nsimg">
        </div>
    </div>

    <footer>
        <div class="footerleft">
            <div class="footermenu">
                <h1 class="fmenutitle">Useful Links</h1>
                <ul class="fmenulist">
                    <li class="flistitem">Support</li>
                    <li class="flistitem">Refund</li>
                    <li class="flistitem">FAQ</li>
                    <li class="flistitem">Feedback</li>
                    <li class="flistitem">Stories</li>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fmenutitle">About Us</h1>
                <ul class="fList">
                    <li class="fListItem">Company</li>
                    <li class="fListItem">Contact</li>
                    <li class="fListItem">Careers</li>
                    <li class="fListItem">Affiliates</li>
                    <li class="fListItem">Stores</li>
                </ul>
            </div>
            <div class="footermenu">
                <h1 class="fmenutitle">Products</h1>
                <ul class="fmenulist">
                    <li class="flistitem">Air Jordan 1</li>
                    <li class="flistitem">Aura</li>
                    <li class="flistitem">Nike Air Force</li>
                    <li class="flistitem">Blazer</li>
                    <li class="flistitem">Tatum</li>
                </ul>
            </div>
        </div>
        <div class="footerright">
            <div class="footerrightmenu">
                <h1 class="fmenutitle">WE ARE SNEAKERSPHERE!</h1>
            </div>
            <div class="footerrightmenu">
                <h1 class="fmenutitle">Follow Us On:</h1>
                <div class="ficons">
                    <img src="{{asset('frontendimg/img/facebook.png')}}" alt="" class="ficon">
                    <img src="{{asset('frontendimg/img/twitter.png')}}" alt="" class="ficon">
                    <img src="{{asset('frontendimg/img/instagram.png')}}" alt="" class="ficon">
                    <img src="{{asset('frontendimg/img/whatsapp.png')}}" alt="" class="ficon">
                </div>
            </div>
            <div class="footerrightmenu">
                <h1 class="copyright">@SyntaxError. All rights reserved. 2024.</h1>
            </div>
        </div>
    </footer>
  
        
        <script src="{{asset('scriptfile/app.js')}}"></script>


</body>
</html>