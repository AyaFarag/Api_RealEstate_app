<!DOCTYPE html>
<html>
<head>
	<title>Email activation.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<style>
	html, body {
		font-family    : sans-serif;
		height         : 100%;
		margin         : 0;
		display        : flex;
		flex-direction : column;
	}

	header {
		height          : 84px;
		background      : rgb(191, 122, 32);
		color           : #FFF;
		display         : flex;
		align-items     : center;
		justify-content : center;
	}

	.container {
		display        : flex;
		flex-direction : column;
		align-items    : center;
		flex           : 1;
	}

	button {
		background    : rgb(229, 145, 36);
		border        : none;
		box-shadow    : 0 1px 4.1px 0.3px rgba(31, 39, 51, 0.56);
		color         : #FFF;
		font-size     : 24px;
		border-radius : 25px;
		height        : 50px;
		cursor        : pointer;
		padding       : 0 20px;
	}

	button:focus {
		outline : 0;
	}
</style>
<body>
	<header>
		<h1>Welcome to {{ config('app.name') }}</h1>
	</header>
	<div class="container full-height">
		<div class="container">
			<p>Please activate your email address by clicking below.</p>
			<a href="{{ $link }}">
				<button>
					Activate
				</button>
			</a>
		</div>
		<p>If you haven't signed up for our website, you can safely ignore this email.</p>
	</div>
</body>
</html>