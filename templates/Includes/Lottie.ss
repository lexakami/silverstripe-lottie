$setupLottieRequirements

<% with $getLottieAnimation($Name) %>
    <div data-lottie-path="$AnimationJson.URL"
        <% if $Autoplay %>data-lottie-autoplay="true"<% end_if %>
        <% if $Loop %>data-lottie-loop="true"<% end_if %>
        class="js-lottie"
    ></div>
<% end_with %>
