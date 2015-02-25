<div class="contactContainer ng-cloak" ng-controller="homepageContent">
	<div class="contactLeft">
		<h1>{{bizInfo.businessName}}</h1>
		<p>{{bizInfo.address.address1}}</p>
		<p>{{bizInfo.address.city}}, {{bizInfo.address.province}}</p>
		<p>{{bizInfo.address.country}} {{bizInfo.address.postalCode}}</p>
		<br>
		<p ng-if="bizInfo.contact.phoneLocal != ''">{{bizInfo.contact.phoneLocal}} | Phone</p>
		<p ng-if="bizInfo.contact.phoneFax != ''">{{bizInfo.contact.phoneFax}} | Fax</p>
		<p ng-if="bizInfo.contact.phoneTollFree != ''">{{bizInfo.contact.phoneTollFree}} | Toll Free</p>
		<br>
		<p ng-if="bizInfo.contact.website != ''"><a target="_blank" href="{{bizInfo.contact.website}}">{{bizInfo.contact.website}}</a></p>
		<p ng-if="bizInfo.contact.profile != ''"><a target="_blank" href="{{bizInfo.contact.profile}}"><?php echo $shopDomain; ?> Profile</a></p>
		<p ng-if="bizInfo.contact.googleplus != ''"><a target="_blank" href="http://google.com/{{bizInfo.contact.googleplus}}">Google +</a></p>
		<p ng-if="bizInfo.contact.linkedin != ''"><a target="_blank" href="http://linkedin.com/{{bizInfo.contact.linkedin}}">LinkedIn</a></p>
		<p ng-if="bizInfo.contact.instagram != ''"><a target="_blank" href="http://instagram.com/{{bizInfo.contact.instagram}}">Instagram</a></p>
		<p ng-if="bizInfo.contact.tripadvisor != ''"><a target="_blank" href="http://tripadvisor.com/{{bizInfo.contact.tripadvisor}}">Trip Advisor</a></p>
		<p ng-if="bizInfo.contact.facebook != ''"><a target="_blank" href="http://facebook.com/{{bizInfo.contact.facebook}}">Facebook</a></p>
		<p ng-if="bizInfo.contact.youtube != ''"><a target="_blank" href="http://youtube.com/{{bizInfo.contact.youtube}}">YouTube</a></p>
		<p ng-if="bizInfo.contact.twitter != ''"><a target="_blank" href="http://twitter.com/{{bizInfo.contact.twitter}}">Twitter</a></p>
		<p ng-if="bizInfo.contact.pinterest != ''"><a target="_blank" href="http://pinterest.com/{{bizInfo.contact.pinterest}}">Pinterest</a></p>
		<br>
		<h2>Hours of Operation:</h2>
		<table ng-hide="bizInfo.hours.meta.useDetails" class="hoursTable">
			<tr ng-repeat="days in bizInfo.hours.hoursDetails.days">
				<td>{{days.dayName}}:<td>
				<td ng-repeat="times in days.times">{{times.start}} - {{times.end}}</td>
			</tr>
		</table>
		<p ng-hide="bizInfo.hours.meta.useText">{{bizInfo.hours.hoursText}}</p>
		<br>
		<div ng-if="bizInfo.paymentMethods != ''">
			<h2>Payment Methods:</h2>
			<p>{{bizInfo.paymentMethods}}</p>
		</div>
		<br>
	</div>
	<div class="contactFormContainer" ng-controller="contactFormController">
		<h2>Contact Form</h2>
		<form class="contactForm" name="contactForm" id="contactForm" ng-submit="submit(contactForm)">
			<label for="name">Name (required):</label>
			<input ng-model="formData.name" name="name" placeholder="Please enter your name" type="text">
			<label for="email">Email (required):</label>
			<input ng-model="formData.email" name="email" placeholder="Please enter your email" type="email">
			<label for="phone">Phone Number (required):</label>
			<input ng-model="formData.phone" name="phone" placeholder="Please enter your phone number" type="tel">
			<label for="content">Message:</label>
			<textarea ng-model="formData.content" name="content" placeholder="Please enter your message" id="" cols="20" rows="5"></textarea>
			<input class="contactSubmit" type="submit" value="submit">
		</form>
	</div>
	<input class="directoryId" type="hidden" value="{{bizInfo.shopsite.directoryId}}">
</div>
