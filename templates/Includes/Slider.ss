<% loop SlideList %>

<% if First %><div class="slick-slider slick-slider-{$URLSegment}"><% end_if %>

	<div class="slide-item slide-{$Pos}" style="<% if sImageID > 0 %>background-image: url('$sImage.URL');<% end_if %>">
		<a href="$Link"{$targetDestination}>
			<span class="content">
				<span class="main_heading">$Name</span>
				<span class="main_content">$Content</span>
			</span>
		</a>
	</div>

<% if Last %>
</div>
<div class="slick-slider-elements">
	<div class="dots"></div>
	<div class="nav-arrows"></div>
</div>
<% end_if %>

<% end_loop %>