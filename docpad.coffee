# DocPad Configuration File
# http://docpad.org/docs/config

# Define the DocPad Configuration
docpadConfig = {
	collections:
          pages: ->
              @getCollection("html").findAllLive({isPage:true}, [menuOrder: 1])

  templateData:
    site:
      name: "IST style guide"

  # Scripts
  scripts: [
    "//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"
    "//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"
    "//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.9.0/highlight.min.js"
    "/scripts/bootstrap.min.js"
  ]
}

# Export the DocPad Configuration
module.exports = docpadConfig
