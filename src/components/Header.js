import React from "react";

function Header() {
  return (
    <div>
      <div className="preloader" id="preloader">
        <div className="loader loader-1">
          <div className="loader-outter"></div>
          <div className="loader-inner"></div>
        </div>
      </div>
      <div className="side-menu-wrapper">
        <div className="menu-toogle-icon">
          <div id="nav-icon3">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <div className="side-menu">
          <a
            href="#"
            className="profile-photo"
            style={{
              padding: "10px 10px",
              display: " inline-block",
            }}
          >
            <img
              src="img/logo.png"
              alt=""
              className="wow zoomIn"
              data-wow-delay="0.2s"
              style={{
                objectFit: "contain",
                color: "#fff",
              }}
            />
          </a>
          <ul id="mainmenu-area">
            <li className="current">
              <a href="#home" className="wow fadeInUp" data-wow-delay="0.4s">
                <i className="fa fa-home"></i>Home{" "}
              </a>
            </li>
            <li>
              <a href="#about" className="wow fadeInUp" data-wow-delay="0.4s">
                <i className="fa fa-user"></i>About{" "}
              </a>
            </li>
            <li>
              <a href="#service" className="wow fadeInUp" data-wow-delay="0.4s">
                <i className="fa fa-briefcase"></i>Services{" "}
              </a>
            </li>
            <li>
              <a href="#resume" className="wow fadeInUp" data-wow-delay="0.4s">
                <i className="fa fa-file-text"></i>Resume{" "}
              </a>
            </li>
            <li>
              <a
                href="#project-gallery"
                className="wow fadeInUp"
                data-wow-delay="0.4s"
              >
                <i className="fa fa-file-image-o"></i>Portfolio{" "}
              </a>
            </li>
            <li>
              <a href="#blog" className="wow fadeInUp" data-wow-delay="0.4s">
                <i className="fa fa-rss"></i>Blog{" "}
              </a>
            </li>
            <li>
              <a href="#contact" className="wow fadeInUp" data-wow-delay="0.4s">
                <i className="fa fa-whatsapp"></i>Contact{" "}
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  );
}

export default Header;
