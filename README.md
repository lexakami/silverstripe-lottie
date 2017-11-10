# Silverstripe Lottie Animation

This module aims to streamline the processs to add SVG animations into your projects.

Uses [Lottie](https://airbnb.design/lottie/) and the [bodymovin.js](https://github.com/bodymovin) library to create lightweight SVG animations from a JSON file exported from After Effects using the Bodymovin extension.

You will need:

- A JSON file of the animation exported from After effects

```
<% include Lottie Path="path/to/file/data.json", Autoplay="true", Loop="true" %>
```

## TODO
- [ ] Fallback to static image for non SVG supported browsers and devices
- [ ] Interactions (on click etc)
- [ ] Permissions on json files
- [ ] CMS JSON upload
- [ ] CMS editable attributes for each animation
- [ ] Accessibility

