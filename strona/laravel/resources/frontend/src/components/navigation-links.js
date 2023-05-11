import React from 'react'

import PropTypes from 'prop-types'

import './navigation-links.css'

const NavigationLinks = (props) => {
  return (
    <nav className={`navigation-links-nav ${props.rootClassName} `}>
      <strong className="navigation-links-text">{props.text}</strong>
      <strong className="navigation-links-text1">{props.text1}</strong>
      <strong className="navigation-links-text2">{props.text2}</strong>
    </nav>
  )
}

NavigationLinks.defaultProps = {
  text3: 'Team',
  text1: 'Features',
  text2: 'Pricing',
  rootClassName: '',
  text4: 'Blog',
  text: 'About',
}

NavigationLinks.propTypes = {
  text3: PropTypes.string,
  text1: PropTypes.string,
  text2: PropTypes.string,
  rootClassName: PropTypes.string,
  text4: PropTypes.string,
  text: PropTypes.string,
}

export default NavigationLinks
