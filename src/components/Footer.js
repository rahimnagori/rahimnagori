import React from "react";
import Icon from "../icons/icon_us1.jpg";

function Footer() {
  return (
    <div>
      <div className="rahim_footer1 main-content">
        <div className="container">
          <div className="rahim_f2">
            <div className="row">
              <div className="col-sm-6">
                <h4>
                  <a href="<?=site_url();?>">
                    <img src="<?=site_url('assets/site/');?>img/logo_foopter.png" />{" "}
                    RAHIM NAGORI{" "}
                  </a>
                </h4>
              </div>
              <div className="col-sm-6">
                <div className="rahim_social">
                  <ul>
                    <li>
                      <a
                        href="https://www.freelancer.com/u/rahimnagori"
                        target="_Blank"
                        rel="noreferrer"
                      >
                        <img src={Icon} />
                      </a>
                    </li>
                    <li>
                      <a
                        href="https://www.upwork.com/o/profiles/users/~0172005b514ab0eae1/"
                        target="_Blank"
                        rel="noreferrer"
                      >
                        <img src="<?=site_url('assets/site/');?>img/icon_us2.png" />
                      </a>
                    </li>
                    <li>
                      <a
                        href="https://twitter.com/Abdul_Rnagori"
                        target="_Blank"
                        rel="noreferrer"
                      >
                        <i className="fa fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a
                        href="https://www.linkedin.com/in/rahimnagori/"
                        target="_Blank"
                        rel="noreferrer"
                      >
                        <i className="fa fa-linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/rahim.nagori/">
                        <i className="fa fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default Footer;
