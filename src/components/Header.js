import React from "react";
import Sidebar from "../components/Sidebar";

function Header() {
  const SidebarItems = [
    {
      id: 1,
      title: "Home",
      url: "home",
      icon: "home",
    },
    {
      id: 2,
      title: "About",
      url: "about",
      icon: "user",
    },
    {
      id: 3,
      title: "Services",
      url: "service",
      icon: "briefcase",
    },
    {
      id: 4,
      title: "Services",
      url: "service",
      icon: "briefcase",
    },
    {
      id: 5,
      title: "Resume",
      url: "resume",
      icon: "file-text",
    },
    {
      id: 6,
      title: "Portfolio",
      url: "project-gallery",
      icon: "file-image-o",
    },
    {
      id: 7,
      title: "Blog",
      url: "blog",
      icon: "rss",
    },
    {
      id: 8,
      title: "Contact",
      url: "contact",
      icon: "whatsapp",
    },
  ];
  return (
    <div>
      {/* <div className="preloader" id="preloader">
        <div className="loader loader-1">
          <div className="loader-outter"></div>
          <div className="loader-inner"></div>
        </div>
      </div> */}
      <div className="side-menu-wrapper">
        <div className="menu-toogle-icon">
          <div id="nav-icon3">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <Sidebar SidebarItems={SidebarItems} />
      </div>
    </div>
  );
}

export default Header;
