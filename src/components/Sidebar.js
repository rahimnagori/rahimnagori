import React from "react";

function Sidebar({ SidebarItems }) {
  const RenderedSidebarItems = SidebarItems.map((item) => {
    return (
      <li className={item.id === 1 ? "current" : ""} key={item.id}>
        <a href={`#${item.url}`} className="wow fadeInUp" data-wow-delay="0.4s">
          <i className={`fa fa-${item.icon}`}></i>
          {item.title}
        </a>
      </li>
    );
  });

  return (
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
      <ul id="mainmenu-area">{RenderedSidebarItems}</ul>
    </div>
  );
}

export default Sidebar;
