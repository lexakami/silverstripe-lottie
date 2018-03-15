# Silverstripe Lottie Animation

This module aims to streamline the processs to add SVG animations into your projects.

Uses [Lottie](https://airbnb.design/lottie/) and the [bodymovin.js](https://github.com/bodymovin) library to create lightweight SVG animations from a JSON file exported from After Effects using the Bodymovin extension.

You will need:

- A JSON file of the animation exported from After effects

To use, create an animation under the Animations tab in the CMS and upload your JSON animation file.

Place in the template by using the Lottie include, specifying the name of the animation.

```
<% include Lottie Name="My Animation Name" %>
```

## TODO
- [ ] Upgrade to be SS4 compatible
- [ ] Interactions (on click etc)
- [ ] Fallback to static image for non SVG supported browsers and devices
- [x] Permissions on json files
- [x] CMS JSON upload
- [x] CMS editable attributes for each animation
- [x] Accessibility
