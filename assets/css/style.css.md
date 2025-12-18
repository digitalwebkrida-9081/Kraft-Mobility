/_ 1. Global Reset _/

- {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  }

body {
font-family: "Poppins", sans-serif;
background-color: #f5f5f5;
}

.logo-image {
width: 110px;
height: 55px;
display: block;
/_ align-items: center;
justify-content: center; _/
}

/_ 2. Header Layout _/
.main-header {
background-color: white;
width: 100%;
border-bottom: 2px solid #c1671d;
box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
}

.header-container {
max-width: 1440px; /_ Limits width on huge screens _/
margin: 0 auto;
height: 100px;
display: flex;
justify-content: space-between;
align-items: center;
padding: 0 20px;
position: relative;
}

/_ 3. Logo Styling (Recreating your geometric shapes relatively) _/
.logo-wrapper {
position: relative;
width: 120px;
height: 60px;
/_ This keeps your logo parts contained in one box _/
}

.logo-shape {
position: absolute;
background-color: #c1671d;
}

/_ Exact proportions from your original code, adjusted to be relative to the wrapper _/
.shape-1 {
width: 39px;
height: 23px;
top: 23px;
left: 8px;
}
.shape-2 {
width: 37px;
height: 28px;
top: 0px;
left: 1px;
}
.shape-3 {
width: 26px;
height: 26px;
top: 0px;
left: 34px;
}
.shape-4 {
width: 35px;
height: 30px;
top: 13px;
left: 0px;
}
.shape-5 {
width: 72px;
height: 30px;
top: 6px;
left: 82px;
}

/_ 4. Navigation Menu _/
.nav-menu {
display: flex;
gap: 30px;
align-items: center;
}

.nav-link {
text-decoration: none;
color: black;
font-size: 18px;
font-weight: 300;
transition: color 0.3s ease;
letter-spacing: 1px;
}

.nav-link:hover,
.nav-link.active {
color: #c1671d;
font-weight: 400;
}

/_ Dropdown styling _/
.nav-item-dropdown {
display: flex;
align-items: center;
gap: 8px;
cursor: pointer;
}

.dropdown-arrow {
/_ width: 0;
height: 0;
border-left: 6px solid transparent;
border-right: 6px solid transparent;
border-top: 8px solid black; _/

transition: transform 0.3s;
}

.nav-item-dropdown:hover .dropdown-arrow {
transform: rotate(180deg); /_ Animates arrow on hover _/
border-top-color: #c1671d;
}

/_ 5. Login Button _/
.btn-login {
background-color: #c1671d;
color: white;
padding: 10px 30px;
border-radius: 6px;
text-decoration: none;
font-weight: 400;
font-size: 18px;
/_ transition: background 0.3s; _/
}

.btn-login:hover {
background-color: #a05315;
}

.mobile-toggle {
display: none; /_ Hidden on desktop _/
}

/_ --- RESPONSIVE DESIGN (Mobile View) --- _/
@media (max-width: 1024px) {
.header-container {
padding: 0 15px;
}

.nav-menu {
gap: 15px;
}

.nav-link {
font-size: 16px;
}
}

@media (max-width: 768px) {
/_ Hide the normal menu and show hamburger icon _/
.nav-menu,
.auth-section {
display: none;
}

.mobile-toggle {
display: flex;
flex-direction: column;
gap: 5px;
cursor: pointer;
}

.mobile-toggle span {
width: 30px;
height: 3px;
background-color: #c1671d;
border-radius: 2px;
}

/_ Optional: If you want the menu to appear on mobile,
you would typically add JavaScript to toggle a 'show' class here.
For now, this layout ensures it doesn't break on small screens. _/
}

/_ --- FOOTER STYLES --- _/

.main-footer {
width: 100%;
background-color: white;
border-top: 6px solid #c1671d;
display: flex;
flex-direction: column;
align-items: center;
position: relative;
padding-top: 60px; /_ Space for logo at top _/
margin-top: 50px; /_ Separates footer from rest of page _/
}

/_ 1. Logo Handling (Reusing generic logo classes, but centering wrapper) _/
.footer-logo-wrapper {
position: relative;
width: 120px;
height: 60px;
margin-bottom: 20px;
}
/_ Note: The .logo-shape classes from the header will work here automatically! _/

/_ 2. Small Divider under logo _/
.footer-divider-small {
width: 264px;
height: 4px;
background-color: #c1671d;
margin: 10px 0 30px 0;
}

/_ 3. Text Styling _/
.footer-text {
text-align: center;
font-family: "Poppins", sans-serif;
color: black;
margin-bottom: 40px;
padding: 0 20px;
}

.footer-text h3 {
font-size: 20px;
font-weight: 400;
margin-bottom: 5px;
}

.footer-text p {
font-size: 18px;
font-weight: 300;
font-style: italic;
color: #555;
}

/_ 4. Social Icons _/
.social-links {
display: flex;
gap: 15px;
margin-bottom: 50px;
}

.social-icon {
width: 47px;
height: 47px;
background-color: #c1671d;
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
text-decoration: none;
color: white;
font-weight: bold;
font-size: 18px;
transition: transform 0.2s, background-color 0.2s;
}

.social-icon:hover {
transform: scale(1.1);
background-color: #a05315;
}

/_ 5. Bottom Bar (Copyright & Privacy) _/
.footer-bottom {
width: 100%;
border-top: 2px solid #c1671d;
padding: 20px 50px;
display: flex;
justify-content: space-between; /_ Pushes content to left and right edges _/
align-items: center;
flex-wrap: wrap; /_ Allows stacking on mobile _/
}

.copyright {
color: #c1671d;
font-size: 16px; /_ Slightly smaller for better fit _/
font-weight: 500;
}

.privacy-policy {
color: #c1671d;
font-size: 16px;
font-weight: 500;
text-decoration: underline;
}

/_ --- RESPONSIVE FOOTER --- _/
@media (max-width: 768px) {
.footer-divider-small {
width: 150px; /_ Shrink divider on mobile _/
}

.footer-text h3 {
font-size: 18px;
}

.footer-text p {
font-size: 16px;
}

.footer-bottom {
flex-direction: column; /_ Stack them vertically _/
gap: 15px;
text-align: center;
padding: 20px;
}
}
