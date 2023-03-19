<style>
@import url("fontawesome-all.min.css");
@import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300italic,600,600italic");

/*
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

html, body, div, span, applet, object,
iframe, h1, h2, h3, h4, h5, h6, p, blockquote,
pre, a, abbr, acronym, address, big, cite,
code, del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var, b,
u, i, center, dl, dt, dd, ol, ul, li, fieldset,
form, label, legend, table, caption, tbody,
tfoot, thead, tr, th, td, article, aside,
canvas, details, embed, figure, figcaption,
footer, header, hgroup, menu, nav, output, ruby,
section, summary, time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;}

article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
	display: block;}

body {
	line-height: 1;
}

ol, ul {
	list-style: none;
}

blockquote, q {
	quotes: none;
}

	blockquote:before, blockquote:after, q:before, q:after {
		content: '';
		content: none;
	}

table {
	border-collapse: collapse;
	border-spacing: 0;
}

body {
	-webkit-text-size-adjust: none;
}

mark {
	background-color: transparent;
	color: inherit;
}

input::-moz-focus-inner {
	border: 0;
	padding: 0;
}

input, select, textarea {
	-moz-appearance: none;
	-webkit-appearance: none;
	-ms-appearance: none;
	appearance: none;
}

/* Basic */

	html {
		box-sizing: border-box;
	}

	*, *:before, *:after {
		box-sizing: inherit;
	}

	body {
		background: #f7f7f7 url("images/bg01.png");
	}

		body.is-preload *, body.is-preload *:before, body.is-preload *:after {
			-moz-animation: none !important;
			-webkit-animation: none !important;
			-ms-animation: none !important;
			animation: none !important;
			-moz-transition: none !important;
			-webkit-transition: none !important;
			-ms-transition: none !important;
			transition: none !important;
		}

	body, input, select, textarea {
		color: #474747;
		font-family: 'Source Sans Pro', sans-serif;
		font-size: 16pt;
		font-weight: 300;
		line-height: 1.65em;
	}

	a {
		-moz-transition: color 0.2s ease-in-out, border-color 0.2s ease-in-out, opacity 0.2s ease-in-out;
		-webkit-transition: color 0.2s ease-in-out, border-color 0.2s ease-in-out, opacity 0.2s ease-in-out;
		-ms-transition: color 0.2s ease-in-out, border-color 0.2s ease-in-out, opacity 0.2s ease-in-out;
		transition: color 0.2s ease-in-out, border-color 0.2s ease-in-out, opacity 0.2s ease-in-out;
		color: #37c0fb;
		text-decoration: none;
		border-bottom: dotted 1px;
	}

		a:hover {
			color: #37c0fb;
			border-bottom-color: transparent;
		}

	strong, b {
		font-weight: 600;
	}

	em, i {
		font-style: italic;
	}

	p, ul, ol, dl, table, blockquote {
		margin: 0 0 2em 0;
	}

	h1, h2, h3, h4, h5, h6 {
		color: inherit;
		font-weight: 600;
		line-height: 1.75em;
		margin-bottom: 1em;
	}

		h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
			color: inherit;
			text-decoration: none;
		}

		h1 em, h2 em, h3 em, h4 em, h5 em, h6 em {
			font-style: normal;
			font-weight: 300;
		}

	h2 {
		font-size: 1.75em;
		letter-spacing: -0.025em;
	}

	h3 {
		font-size: 1.2em;
		letter-spacing: -0.025em;
	}

	sub {
		font-size: 0.8em;
		position: relative;
		top: 0.5em;
	}

	sup {
		font-size: 0.8em;
		position: relative;
		top: -0.5em;
	}

	hr {
		border-top: solid 1px #e0e0e0;
		border: 0;
		margin-bottom: 1.5em;
	}

	blockquote {
		border-left: solid 0.5em #e0e0e0;
		font-style: italic;
		padding: 1em 0 1em 2em;
	}

/* Container */

	.container {
		margin: 0 auto;
		max-width: 100%;
		width: 1400px;
	}

		@media screen and (max-width: 1680px) {

			.container {
				width: 1200px;
			}

		}

		@media screen and (max-width: 1280px) {

			.container {
				width: 960px;
			}

		}

		@media screen and (max-width: 980px) {

			.container {
				width: 95%;
			}

		}

		@media screen and (max-width: 840px) {

			.container {
				width: 95%;
			}

		}

		@media screen and (max-width: 736px) {

			.container {
				width: 90%;
			}

		}

		@media screen and (max-width: 480px) {

			.container {
				width: 100%;
			}

		}

/* Row */

	.row {
		display: flex;
		flex-wrap: wrap;
		box-sizing: border-box;
		align-items: stretch;
	}

		.row > * {
			box-sizing: border-box;
		}

		.row.gtr-uniform > * > :last-child {
			margin-bottom: 0;
		}

		.row.aln-left {
			justify-content: flex-start;
		}

		.row.aln-center {
			justify-content: center;
		}

		.row.aln-right {
			justify-content: flex-end;
		}

		.row.aln-top {
			align-items: flex-start;
		}

		.row.aln-middle {
			align-items: center;
		}

		.row.aln-bottom {
			align-items: flex-end;
		}

		.row > .imp {
			order: -1;
		}

		.row > .col-1 {
			width: 8.33333%;
		}

		.row > .off-1 {
			margin-left: 8.33333%;
		}

		.row > .col-2 {
			width: 16.66667%;
		}

		.row > .off-2 {
			margin-left: 16.66667%;
		}

		.row > .col-3 {
			width: 25%;
		}

		.row > .off-3 {
			margin-left: 25%;
		}

		.row > .col-4 {
			width: 33.33333%;
		}

		.row > .off-4 {
			margin-left: 33.33333%;
		}

		.row > .col-5 {
			width: 41.66667%;
		}

		.row > .off-5 {
			margin-left: 41.66667%;
		}

		.row > .col-6 {
			width: 50%;
		}

		.row > .off-6 {
			margin-left: 50%;
		}

		.row > .col-7 {
			width: 58.33333%;
		}

		.row > .off-7 {
			margin-left: 58.33333%;
		}

		.row > .col-8 {
			width: 66.66667%;
		}

		.row > .off-8 {
			margin-left: 66.66667%;
		}

		.row > .col-9 {
			width: 75%;
		}

		.row > .off-9 {
			margin-left: 75%;
		}

		.row > .col-10 {
			width: 83.33333%;
		}

		.row > .off-10 {
			margin-left: 83.33333%;
		}

		.row > .col-11 {
			width: 91.66667%;
		}

		.row > .off-11 {
			margin-left: 91.66667%;
		}

		.row > .col-12 {
			width: 100%;
		}

		.row > .off-12 {
			margin-left: 100%;
		}

		.row.gtr-0 {
			margin-top: 0px;
			margin-left: 0px;
		}

			.row.gtr-0 > * {
				padding: 0px 0 0 0px;
			}

			.row.gtr-0.gtr-uniform {
				margin-top: 0px;
			}

				.row.gtr-0.gtr-uniform > * {
					padding-top: 0px;
				}

		.row.gtr-25 {
			margin-top: -12.5px;
			margin-left: -12.5px;
		}

			.row.gtr-25 > * {
				padding: 12.5px 0 0 12.5px;
			}

			.row.gtr-25.gtr-uniform {
				margin-top: -12.5px;
			}

				.row.gtr-25.gtr-uniform > * {
					padding-top: 12.5px;
				}

		.row.gtr-50 {
			margin-top: -25px;
			margin-left: -25px;
		}

			.row.gtr-50 > * {
				padding: 25px 0 0 25px;
			}

			.row.gtr-50.gtr-uniform {
				margin-top: -25px;
			}

				.row.gtr-50.gtr-uniform > * {
					padding-top: 25px;
				}

		.row {
			margin-top: -50px;
			margin-left: -50px;
		}

			.row > * {
				padding: 50px 0 0 50px;
			}

			.row.gtr-uniform {
				margin-top: -50px;
			}

				.row.gtr-uniform > * {
					padding-top: 50px;
				}

		.row.gtr-150 {
			margin-top: -75px;
			margin-left: -75px;
		}

			.row.gtr-150 > * {
				padding: 75px 0 0 75px;
			}

			.row.gtr-150.gtr-uniform {
				margin-top: -75px;
			}

				.row.gtr-150.gtr-uniform > * {
					padding-top: 75px;
				}

		.row.gtr-200 {
			margin-top: -100px;
			margin-left: -100px;
		}

			.row.gtr-200 > * {
				padding: 100px 0 0 100px;
			}

			.row.gtr-200.gtr-uniform {
				margin-top: -100px;
			}

				.row.gtr-200.gtr-uniform > * {
					padding-top: 100px;
				}

		@media screen and (max-width: 1680px) {

			.row {
				display: flex;
				flex-wrap: wrap;
				box-sizing: border-box;
				align-items: stretch;
			}

				.row > * {
					box-sizing: border-box;
				}

				.row.gtr-uniform > * > :last-child {
					margin-bottom: 0;
				}

				.row.aln-left {
					justify-content: flex-start;
				}

				.row.aln-center {
					justify-content: center;
				}

				.row.aln-right {
					justify-content: flex-end;
				}

				.row.aln-top {
					align-items: flex-start;
				}

				.row.aln-middle {
					align-items: center;
				}

				.row.aln-bottom {
					align-items: flex-end;
				}

				.row > .imp-wide {
					order: -1;
				}

				.row > .col-1-wide {
					width: 8.33333%;
				}

				.row > .off-1-wide {
					margin-left: 8.33333%;
				}

				.row > .col-2-wide {
					width: 16.66667%;
				}

				.row > .off-2-wide {
					margin-left: 16.66667%;
				}

				.row > .col-3-wide {
					width: 25%;
				}

				.row > .off-3-wide {
					margin-left: 25%;
				}

				.row > .col-4-wide {
					width: 33.33333%;
				}

				.row > .off-4-wide {
					margin-left: 33.33333%;
				}

				.row > .col-5-wide {
					width: 41.66667%;
				}

				.row > .off-5-wide {
					margin-left: 41.66667%;
				}

				.row > .col-6-wide {
					width: 50%;
				}

				.row > .off-6-wide {
					margin-left: 50%;
				}

				.row > .col-7-wide {
					width: 58.33333%;
				}

				.row > .off-7-wide {
					margin-left: 58.33333%;
				}

				.row > .col-8-wide {
					width: 66.66667%;
				}

				.row > .off-8-wide {
					margin-left: 66.66667%;
				}

				.row > .col-9-wide {
					width: 75%;
				}

				.row > .off-9-wide {
					margin-left: 75%;
				}

				.row > .col-10-wide {
					width: 83.33333%;
				}

				.row > .off-10-wide {
					margin-left: 83.33333%;
				}

				.row > .col-11-wide {
					width: 91.66667%;
				}

				.row > .off-11-wide {
					margin-left: 91.66667%;
				}

				.row > .col-12-wide {
					width: 100%;
				}

				.row > .off-12-wide {
					margin-left: 100%;
				}

				.row.gtr-0 {
					margin-top: 0px;
					margin-left: 0px;
				}

					.row.gtr-0 > * {
						padding: 0px 0 0 0px;
					}

					.row.gtr-0.gtr-uniform {
						margin-top: 0px;
					}

						.row.gtr-0.gtr-uniform > * {
							padding-top: 0px;
						}

				.row.gtr-25 {
					margin-top: -10px;
					margin-left: -10px;
				}

					.row.gtr-25 > * {
						padding: 10px 0 0 10px;
					}

					.row.gtr-25.gtr-uniform {
						margin-top: -10px;
					}

						.row.gtr-25.gtr-uniform > * {
							padding-top: 10px;
						}

				.row.gtr-50 {
					margin-top: -20px;
					margin-left: -20px;
				}

					.row.gtr-50 > * {
						padding: 20px 0 0 20px;
					}

					.row.gtr-50.gtr-uniform {
						margin-top: -20px;
					}

						.row.gtr-50.gtr-uniform > * {
							padding-top: 20px;
						}

				.row {
					margin-top: -40px;
					margin-left: -40px;
				}

					.row > * {
						padding: 40px 0 0 40px;
					}

					.row.gtr-uniform {
						margin-top: -40px;
					}

						.row.gtr-uniform > * {
							padding-top: 40px;
						}

				.row.gtr-150 {
					margin-top: -60px;
					margin-left: -60px;
				}

					.row.gtr-150 > * {
						padding: 60px 0 0 60px;
					}

					.row.gtr-150.gtr-uniform {
						margin-top: -60px;
					}

						.row.gtr-150.gtr-uniform > * {
							padding-top: 60px;
						}

				.row.gtr-200 {
					margin-top: -80px;
					margin-left: -80px;
				}

					.row.gtr-200 > * {
						padding: 80px 0 0 80px;
					}

					.row.gtr-200.gtr-uniform {
						margin-top: -80px;
					}

						.row.gtr-200.gtr-uniform > * {
							padding-top: 80px;
						}

		}

		@media screen and (max-width: 1280px) {

			.row {
				display: flex;
				flex-wrap: wrap;
				box-sizing: border-box;
				align-items: stretch;
			}

				.row > * {
					box-sizing: border-box;
				}

				.row.gtr-uniform > * > :last-child {
					margin-bottom: 0;
				}

				.row.aln-left {
					justify-content: flex-start;
				}

				.row.aln-center {
					justify-content: center;
				}

				.row.aln-right {
					justify-content: flex-end;
				}

				.row.aln-top {
					align-items: flex-start;
				}

				.row.aln-middle {
					align-items: center;
				}

				.row.aln-bottom {
					align-items: flex-end;
				}

				.row > .imp-normal {
					order: -1;
				}

				.row > .col-1-normal {
					width: 8.33333%;
				}

				.row > .off-1-normal {
					margin-left: 8.33333%;
				}

				.row > .col-2-normal {
					width: 16.66667%;
				}

				.row > .off-2-normal {
					margin-left: 16.66667%;
				}

				.row > .col-3-normal {
					width: 25%;
				}

				.row > .off-3-normal {
					margin-left: 25%;
				}

				.row > .col-4-normal {
					width: 33.33333%;
				}

				.row > .off-4-normal {
					margin-left: 33.33333%;
				}

				.row > .col-5-normal {
					width: 41.66667%;
				}

				.row > .off-5-normal {
					margin-left: 41.66667%;
				}

				.row > .col-6-normal {
					width: 50%;
				}

				.row > .off-6-normal {
					margin-left: 50%;
				}

				.row > .col-7-normal {
					width: 58.33333%;
				}

				.row > .off-7-normal {
					margin-left: 58.33333%;
				}

				.row > .col-8-normal {
					width: 66.66667%;
				}

				.row > .off-8-normal {
					margin-left: 66.66667%;
				}

				.row > .col-9-normal {
					width: 75%;
				}

				.row > .off-9-normal {
					margin-left: 75%;
				}

				.row > .col-10-normal {
					width: 83.33333%;
				}

				.row > .off-10-normal {
					margin-left: 83.33333%;
				}

				.row > .col-11-normal {
					width: 91.66667%;
				}

				.row > .off-11-normal {
					margin-left: 91.66667%;
				}

				.row > .col-12-normal {
					width: 100%;
				}

				.row > .off-12-normal {
					margin-left: 100%;
				}

				.row.gtr-0 {
					margin-top: 0px;
					margin-left: 0px;
				}

					.row.gtr-0 > * {
						padding: 0px 0 0 0px;
					}

					.row.gtr-0.gtr-uniform {
						margin-top: 0px;
					}

						.row.gtr-0.gtr-uniform > * {
							padding-top: 0px;
						}

				.row.gtr-25 {
					margin-top: -7.5px;
					margin-left: -7.5px;
				}

					.row.gtr-25 > * {
						padding: 7.5px 0 0 7.5px;
					}

					.row.gtr-25.gtr-uniform {
						margin-top: -7.5px;
					}

						.row.gtr-25.gtr-uniform > * {
							padding-top: 7.5px;
						}

				.row.gtr-50 {
					margin-top: -15px;
					margin-left: -15px;
				}

					.row.gtr-50 > * {
						padding: 15px 0 0 15px;
					}

					.row.gtr-50.gtr-uniform {
						margin-top: -15px;
					}

						.row.gtr-50.gtr-uniform > * {
							padding-top: 15px;
						}

				.row {
					margin-top: -30px;
					margin-left: -30px;
				}

					.row > * {
						padding: 30px 0 0 30px;
					}

					.row.gtr-uniform {
						margin-top: -30px;
					}

						.row.gtr-uniform > * {
							padding-top: 30px;
						}

				.row.gtr-150 {
					margin-top: -45px;
					margin-left: -45px;
				}

					.row.gtr-150 > * {
						padding: 45px 0 0 45px;
					}

					.row.gtr-150.gtr-uniform {
						margin-top: -45px;
					}

						.row.gtr-150.gtr-uniform > * {
							padding-top: 45px;
						}

				.row.gtr-200 {
					margin-top: -60px;
					margin-left: -60px;
				}

					.row.gtr-200 > * {
						padding: 60px 0 0 60px;
					}

					.row.gtr-200.gtr-uniform {
						margin-top: -60px;
					}

						.row.gtr-200.gtr-uniform > * {
							padding-top: 60px;
						}

		}

		@media screen and (max-width: 980px) {

			.row {
				display: flex;
				flex-wrap: wrap;
				box-sizing: border-box;
				align-items: stretch;
			}

				.row > * {
					box-sizing: border-box;
				}

				.row.gtr-uniform > * > :last-child {
					margin-bottom: 0;
				}

				.row.aln-left {
					justify-content: flex-start;
				}

				.row.aln-center {
					justify-content: center;
				}

				.row.aln-right {
					justify-content: flex-end;
				}

				.row.aln-top {
					align-items: flex-start;
				}

				.row.aln-middle {
					align-items: center;
				}

				.row.aln-bottom {
					align-items: flex-end;
				}

				.row > .imp-narrow {
					order: -1;
				}

				.row > .col-1-narrow {
					width: 8.33333%;
				}

				.row > .off-1-narrow {
					margin-left: 8.33333%;
				}

				.row > .col-2-narrow {
					width: 16.66667%;
				}

				.row > .off-2-narrow {
					margin-left: 16.66667%;
				}

				.row > .col-3-narrow {
					width: 25%;
				}

				.row > .off-3-narrow {
					margin-left: 25%;
				}

				.row > .col-4-narrow {
					width: 33.33333%;
				}

				.row > .off-4-narrow {
					margin-left: 33.33333%;
				}

				.row > .col-5-narrow {
					width: 41.66667%;
				}

				.row > .off-5-narrow {
					margin-left: 41.66667%;
				}

				.row > .col-6-narrow {
					width: 50%;
				}

				.row > .off-6-narrow {
					margin-left: 50%;
				}

				.row > .col-7-narrow {
					width: 58.33333%;
				}

				.row > .off-7-narrow {
					margin-left: 58.33333%;
				}

				.row > .col-8-narrow {
					width: 66.66667%;
				}

				.row > .off-8-narrow {
					margin-left: 66.66667%;
				}

				.row > .col-9-narrow {
					width: 75%;
				}

				.row > .off-9-narrow {
					margin-left: 75%;
				}

				.row > .col-10-narrow {
					width: 83.33333%;
				}

				.row > .off-10-narrow {
					margin-left: 83.33333%;
				}

				.row > .col-11-narrow {
					width: 91.66667%;
				}

				.row > .off-11-narrow {
					margin-left: 91.66667%;
				}

				.row > .col-12-narrow {
					width: 100%;
				}

				.row > .off-12-narrow {
					margin-left: 100%;
				}

				.row.gtr-0 {
					margin-top: 0px;
					margin-left: 0px;
				}

					.row.gtr-0 > * {
						padding: 0px 0 0 0px;
					}

					.row.gtr-0.gtr-uniform {
						margin-top: 0px;
					}

						.row.gtr-0.gtr-uniform > * {
							padding-top: 0px;
						}

				.row.gtr-25 {
					margin-top: -7.5px;
					margin-left: -7.5px;
				}

					.row.gtr-25 > * {
						padding: 7.5px 0 0 7.5px;
					}

					.row.gtr-25.gtr-uniform {
						margin-top: -7.5px;
					}

						.row.gtr-25.gtr-uniform > * {
							padding-top: 7.5px;
						}

				.row.gtr-50 {
					margin-top: -15px;
					margin-left: -15px;
				}

					.row.gtr-50 > * {
						padding: 15px 0 0 15px;
					}

					.row.gtr-50.gtr-uniform {
						margin-top: -15px;
					}

						.row.gtr-50.gtr-uniform > * {
							padding-top: 15px;
						}

				.row {
					margin-top: -30px;
					margin-left: -30px;
				}

					.row > * {
						padding: 30px 0 0 30px;
					}

					.row.gtr-uniform {
						margin-top: -30px;
					}

						.row.gtr-uniform > * {
							padding-top: 30px;
						}

				.row.gtr-150 {
					margin-top: -45px;
					margin-left: -45px;
				}

					.row.gtr-150 > * {
						padding: 45px 0 0 45px;
					}

					.row.gtr-150.gtr-uniform {
						margin-top: -45px;
					}

						.row.gtr-150.gtr-uniform > * {
							padding-top: 45px;
						}

				.row.gtr-200 {
					margin-top: -60px;
					margin-left: -60px;
				}

					.row.gtr-200 > * {
						padding: 60px 0 0 60px;
					}

					.row.gtr-200.gtr-uniform {
						margin-top: -60px;
					}

						.row.gtr-200.gtr-uniform > * {
							padding-top: 60px;
						}

		}

		@media screen and (max-width: 840px) {

			.row {
				display: flex;
				flex-wrap: wrap;
				box-sizing: border-box;
				align-items: stretch;
			}

				.row > * {
					box-sizing: border-box;
				}

				.row.gtr-uniform > * > :last-child {
					margin-bottom: 0;
				}

				.row.aln-left {
					justify-content: flex-start;
				}

				.row.aln-center {
					justify-content: center;
				}

				.row.aln-right {
					justify-content: flex-end;
				}

				.row.aln-top {
					align-items: flex-start;
				}

				.row.aln-middle {
					align-items: center;
				}

				.row.aln-bottom {
					align-items: flex-end;
				}

				.row > .imp-narrower {
					order: -1;
				}

				.row > .col-1-narrower {
					width: 8.33333%;
				}

				.row > .off-1-narrower {
					margin-left: 8.33333%;
				}

				.row > .col-2-narrower {
					width: 16.66667%;
				}

				.row > .off-2-narrower {
					margin-left: 16.66667%;
				}

				.row > .col-3-narrower {
					width: 25%;
				}

				.row > .off-3-narrower {
					margin-left: 25%;
				}

				.row > .col-4-narrower {
					width: 33.33333%;
				}

				.row > .off-4-narrower {
					margin-left: 33.33333%;
				}

				.row > .col-5-narrower {
					width: 41.66667%;
				}

				.row > .off-5-narrower {
					margin-left: 41.66667%;
				}

				.row > .col-6-narrower {
					width: 50%;
				}

				.row > .off-6-narrower {
					margin-left: 50%;
				}

				.row > .col-7-narrower {
					width: 58.33333%;
				}

				.row > .off-7-narrower {
					margin-left: 58.33333%;
				}

				.row > .col-8-narrower {
					width: 66.66667%;
				}

				.row > .off-8-narrower {
					margin-left: 66.66667%;
				}

				.row > .col-9-narrower {
					width: 75%;
				}

				.row > .off-9-narrower {
					margin-left: 75%;
				}

				.row > .col-10-narrower {
					width: 83.33333%;
				}

				.row > .off-10-narrower {
					margin-left: 83.33333%;
				}

				.row > .col-11-narrower {
					width: 91.66667%;
				}

				.row > .off-11-narrower {
					margin-left: 91.66667%;
				}

				.row > .col-12-narrower {
					width: 100%;
				}

				.row > .off-12-narrower {
					margin-left: 100%;
				}

				.row.gtr-0 {
					margin-top: 0px;
					margin-left: 0px;
				}

					.row.gtr-0 > * {
						padding: 0px 0 0 0px;
					}

					.row.gtr-0.gtr-uniform {
						margin-top: 0px;
					}

						.row.gtr-0.gtr-uniform > * {
							padding-top: 0px;
						}

				.row.gtr-25 {
					margin-top: -7.5px;
					margin-left: -7.5px;
				}

					.row.gtr-25 > * {
						padding: 7.5px 0 0 7.5px;
					}

					.row.gtr-25.gtr-uniform {
						margin-top: -7.5px;
					}

						.row.gtr-25.gtr-uniform > * {
							padding-top: 7.5px;
						}

				.row.gtr-50 {
					margin-top: -15px;
					margin-left: -15px;
				}

					.row.gtr-50 > * {
						padding: 15px 0 0 15px;
					}

					.row.gtr-50.gtr-uniform {
						margin-top: -15px;
					}

						.row.gtr-50.gtr-uniform > * {
							padding-top: 15px;
						}

				.row {
					margin-top: -30px;
					margin-left: -30px;
				}

					.row > * {
						padding: 30px 0 0 30px;
					}

					.row.gtr-uniform {
						margin-top: -30px;
					}

						.row.gtr-uniform > * {
							padding-top: 30px;
						}

				.row.gtr-150 {
					margin-top: -45px;
					margin-left: -45px;
				}

					.row.gtr-150 > * {
						padding: 45px 0 0 45px;
					}

					.row.gtr-150.gtr-uniform {
						margin-top: -45px;
					}

						.row.gtr-150.gtr-uniform > * {
							padding-top: 45px;
						}

				.row.gtr-200 {
					margin-top: -60px;
					margin-left: -60px;
				}

					.row.gtr-200 > * {
						padding: 60px 0 0 60px;
					}

					.row.gtr-200.gtr-uniform {
						margin-top: -60px;
					}

						.row.gtr-200.gtr-uniform > * {
							padding-top: 60px;
						}

		}

		@media screen and (max-width: 736px) {

			.row {
				display: flex;
				flex-wrap: wrap;
				box-sizing: border-box;
				align-items: stretch;
			}

				.row > * {
					box-sizing: border-box;
				}

				.row.gtr-uniform > * > :last-child {
					margin-bottom: 0;
				}

				.row.aln-left {
					justify-content: flex-start;
				}

				.row.aln-center {
					justify-content: center;
				}

				.row.aln-right {
					justify-content: flex-end;
				}

				.row.aln-top {
					align-items: flex-start;
				}

				.row.aln-middle {
					align-items: center;
				}

				.row.aln-bottom {
					align-items: flex-end;
				}

				.row > .imp-mobile {
					order: -1;
				}

				.row > .col-1-mobile {
					width: 8.33333%;
				}

				.row > .off-1-mobile {
					margin-left: 8.33333%;
				}

				.row > .col-2-mobile {
					width: 16.66667%;
				}

				.row > .off-2-mobile {
					margin-left: 16.66667%;
				}

				.row > .col-3-mobile {
					width: 25%;
				}

				.row > .off-3-mobile {
					margin-left: 25%;
				}

				.row > .col-4-mobile {
					width: 33.33333%;
				}

				.row > .off-4-mobile {
					margin-left: 33.33333%;
				}

				.row > .col-5-mobile {
					width: 41.66667%;
				}

				.row > .off-5-mobile {
					margin-left: 41.66667%;
				}

				.row > .col-6-mobile {
					width: 50%;
				}

				.row > .off-6-mobile {
					margin-left: 50%;
				}

				.row > .col-7-mobile {
					width: 58.33333%;
				}

				.row > .off-7-mobile {
					margin-left: 58.33333%;
				}

				.row > .col-8-mobile {
					width: 66.66667%;
				}

				.row > .off-8-mobile {
					margin-left: 66.66667%;
				}

				.row > .col-9-mobile {
					width: 75%;
				}

				.row > .off-9-mobile {
					margin-left: 75%;
				}

				.row > .col-10-mobile {
					width: 83.33333%;
				}

				.row > .off-10-mobile {
					margin-left: 83.33333%;
				}

				.row > .col-11-mobile {
					width: 91.66667%;
				}

				.row > .off-11-mobile {
					margin-left: 91.66667%;
				}

				.row > .col-12-mobile {
					width: 100%;
				}

				.row > .off-12-mobile {
					margin-left: 100%;
				}

				.row.gtr-0 {
					margin-top: 0px;
					margin-left: 0px;
				}

					.row.gtr-0 > * {
						padding: 0px 0 0 0px;
					}

					.row.gtr-0.gtr-uniform {
						margin-top: 0px;
					}

						.row.gtr-0.gtr-uniform > * {
							padding-top: 0px;
						}

				.row.gtr-25 {
					margin-top: -5px;
					margin-left: -5px;
				}

					.row.gtr-25 > * {
						padding: 5px 0 0 5px;
					}

					.row.gtr-25.gtr-uniform {
						margin-top: -5px;
					}

						.row.gtr-25.gtr-uniform > * {
							padding-top: 5px;
						}

				.row.gtr-50 {
					margin-top: -10px;
					margin-left: -10px;
				}

					.row.gtr-50 > * {
						padding: 10px 0 0 10px;
					}

					.row.gtr-50.gtr-uniform {
						margin-top: -10px;
					}

						.row.gtr-50.gtr-uniform > * {
							padding-top: 10px;
						}

				.row {
					margin-top: -20px;
					margin-left: -20px;
				}

					.row > * {
						padding: 20px 0 0 20px;
					}

					.row.gtr-uniform {
						margin-top: -20px;
					}

						.row.gtr-uniform > * {
							padding-top: 20px;
						}

				.row.gtr-150 {
					margin-top: -30px;
					margin-left: -30px;
				}

					.row.gtr-150 > * {
						padding: 30px 0 0 30px;
					}

					.row.gtr-150.gtr-uniform {
						margin-top: -30px;
					}

						.row.gtr-150.gtr-uniform > * {
							padding-top: 30px;
						}

				.row.gtr-200 {
					margin-top: -40px;
					margin-left: -40px;
				}

					.row.gtr-200 > * {
						padding: 40px 0 0 40px;
					}

					.row.gtr-200.gtr-uniform {
						margin-top: -40px;
					}

						.row.gtr-200.gtr-uniform > * {
							padding-top: 40px;
						}

		}

		@media screen and (max-width: 480px) {

			.row {
				display: flex;
				flex-wrap: wrap;
				box-sizing: border-box;
				align-items: stretch;
			}

				.row > * {
					box-sizing: border-box;
				}

				.row.gtr-uniform > * > :last-child {
					margin-bottom: 0;
				}

				.row.aln-left {
					justify-content: flex-start;
				}

				.row.aln-center {
					justify-content: center;
				}

				.row.aln-right {
					justify-content: flex-end;
				}

				.row.aln-top {
					align-items: flex-start;
				}

				.row.aln-middle {
					align-items: center;
				}

				.row.aln-bottom {
					align-items: flex-end;
				}

				.row > .imp-mobilep {
					order: -1;
				}

				.row > .col-1-mobilep {
					width: 8.33333%;
				}

				.row > .off-1-mobilep {
					margin-left: 8.33333%;
				}

				.row > .col-2-mobilep {
					width: 16.66667%;
				}

				.row > .off-2-mobilep {
					margin-left: 16.66667%;
				}

				.row > .col-3-mobilep {
					width: 25%;
				}

				.row > .off-3-mobilep {
					margin-left: 25%;
				}

				.row > .col-4-mobilep {
					width: 33.33333%;
				}

				.row > .off-4-mobilep {
					margin-left: 33.33333%;
				}

				.row > .col-5-mobilep {
					width: 41.66667%;
				}

				.row > .off-5-mobilep {
					margin-left: 41.66667%;
				}

				.row > .col-6-mobilep {
					width: 50%;
				}

				.row > .off-6-mobilep {
					margin-left: 50%;
				}

				.row > .col-7-mobilep {
					width: 58.33333%;
				}

				.row > .off-7-mobilep {
					margin-left: 58.33333%;
				}

				.row > .col-8-mobilep {
					width: 66.66667%;
				}

				.row > .off-8-mobilep {
					margin-left: 66.66667%;
				}

				.row > .col-9-mobilep {
					width: 75%;
				}

				.row > .off-9-mobilep {
					margin-left: 75%;
				}

				.row > .col-10-mobilep {
					width: 83.33333%;
				}

				.row > .off-10-mobilep {
					margin-left: 83.33333%;
				}

				.row > .col-11-mobilep {
					width: 91.66667%;
				}

				.row > .off-11-mobilep {
					margin-left: 91.66667%;
				}

				.row > .col-12-mobilep {
					width: 100%;
				}

				.row > .off-12-mobilep {
					margin-left: 100%;
				}

				.row.gtr-0 {
					margin-top: 0px;
					margin-left: 0px;
				}

					.row.gtr-0 > * {
						padding: 0px 0 0 0px;
					}

					.row.gtr-0.gtr-uniform {
						margin-top: 0px;
					}

						.row.gtr-0.gtr-uniform > * {
							padding-top: 0px;
						}

				.row.gtr-25 {
					margin-top: -5px;
					margin-left: -5px;
				}

					.row.gtr-25 > * {
						padding: 5px 0 0 5px;
					}

					.row.gtr-25.gtr-uniform {
						margin-top: -5px;
					}

						.row.gtr-25.gtr-uniform > * {
							padding-top: 5px;
						}

				.row.gtr-50 {
					margin-top: -10px;
					margin-left: -10px;
				}

					.row.gtr-50 > * {
						padding: 10px 0 0 10px;
					}

					.row.gtr-50.gtr-uniform {
						margin-top: -10px;
					}

						.row.gtr-50.gtr-uniform > * {
							padding-top: 10px;
						}

				.row {
					margin-top: -20px;
					margin-left: -20px;
				}

					.row > * {
						padding: 20px 0 0 20px;
					}

					.row.gtr-uniform {
						margin-top: -20px;
					}

						.row.gtr-uniform > * {
							padding-top: 20px;
						}

				.row.gtr-150 {
					margin-top: -30px;
					margin-left: -30px;
				}

					.row.gtr-150 > * {
						padding: 30px 0 0 30px;
					}

					.row.gtr-150.gtr-uniform {
						margin-top: -30px;
					}

						.row.gtr-150.gtr-uniform > * {
							padding-top: 30px;
						}

				.row.gtr-200 {
					margin-top: -40px;
					margin-left: -40px;
				}

					.row.gtr-200 > * {
						padding: 40px 0 0 40px;
					}

					.row.gtr-200.gtr-uniform {
						margin-top: -40px;
					}

						.row.gtr-200.gtr-uniform > * {
							padding-top: 40px;
						}

		}

/* Section/Article */

	section.special, article.special {
		text-align: center;
	}

	header p {
		color: #999;
		font-size: 1.25em;
		position: relative;
		margin-top: -1.25em;
		margin-bottom: 2.25em;
	}

	header.major {
		text-align: center;
		margin: 0 0 2em 0;
	}

		header.major h2 {
			font-size: 2.25em;
		}

		header.major p {
			position: relative;
			border-top: solid 1px #e0e0e0;
			padding: 1em 0 0 0;
			margin: 0;
			top: -1em;
			font-size: 1.5em;
			letter-spacing: -0.025em;
		}

	footer {
		margin: 0 0 3em 0;
	}

		footer > :last-child {
			margin-bottom: 0;
		}

		footer.major {
			padding-top: 3em;
		}

/* Form */

	input[type="text"],
	input[type="password"],
	input[type="email"],
	textarea {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		-moz-transition: border-color 0.2s ease-in-out;
		-webkit-transition: border-color 0.2s ease-in-out;
		-ms-transition: border-color 0.2s ease-in-out;
		transition: border-color 0.2s ease-in-out;
		background: #fff;
		border: solid 1px #e0e0e0;
		border-radius: 5px;
		color: inherit;
		display: block;
		outline: 0;
		padding: 0.75em;
		text-decoration: none;
		width: 100%;
	}

		input[type="text"]:focus,
		input[type="password"]:focus,
		input[type="email"]:focus,
		textarea:focus {
			border-color: #37c0fb;
		}

	input[type="text"],
	input[type="password"],
	input[type="email"] {
		line-height: 1em;
	}

	label {
		display: block;
		color: inherit;
		font-weight: 600;
		line-height: 1.75em;
		margin-bottom: 0.5em;
	}

	::-webkit-input-placeholder {
		color: #999;
		position: relative;
		top: 3px;
	}

	:-moz-placeholder {
		color: #999;
	}

	::-moz-placeholder {
		color: #999;
	}

	:-ms-input-placeholder {
		color: #999;
	}

/* Image */

	.image {
		border: 0;
		display: inline-block;
		position: relative;
		border-radius: 5px;
	}

		.image img {
			display: block;
			border-radius: 5px;
		}

		.image.left {
			display: block;
			float: left;
			margin: 0 2em 2em 0;
			position: relative;
			top: 0.25em;
		}

			.image.left img {
				display: block;
				width: 100%;
			}

		.image.fit {
			display: block;
		}

			.image.fit img {
				display: block;
				width: 100%;
			}

		.image.featured {
			display: block;
			margin: 0 0 2em 0;
		}

			.image.featured img {
				display: block;
				width: 100%;
			}

/* Icon */

	.icon {
		text-decoration: none;
		position: relative;
		text-decoration: none;
	}

		.icon:before {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			display: inline-block;
			font-style: normal;
			font-variant: normal;
			text-rendering: auto;
			line-height: 1;
			text-transform: none !important;
			font-family: 'Font Awesome 5 Free';
			font-weight: 400;
		}

		.icon > .label {
			display: none;
		}

		.icon:before {
			line-height: inherit;
		}

		.icon.solid:before {
			font-weight: 900;
		}

		.icon.brands:before {
			font-family: 'Font Awesome 5 Brands';
		}

		.icon.major {
			text-align: center;
			cursor: default;
			background-color: #37c0fb;
			background-image: -moz-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.15)), url("images/bg01.png");
			background-image: -webkit-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.15)), url("images/bg01.png");
			background-image: -ms-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.15)), url("images/bg01.png");
			background-image: linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.15)), url("images/bg01.png");
			color: #fff;
			border-radius: 100%;
			display: inline-block;
			width: 5em;
			height: 5em;
			line-height: 5em;
			box-shadow: 0 0 0 7px white, 0 0 0 8px #e0e0e0;
			margin: 0 0 2em 0;
		}

			.icon.major:before {
				font-size: 36px;
			}

/* Lists */

	ol {
		list-style: decimal;
		padding-left: 1.25em;
	}

		ol li {
			padding-left: 0.25em;
		}

	ul {
		list-style: disc;
		padding-left: 1em;
	}

		ul li {
			padding-left: 0.5em;
		}

/* Links */

	ul.links {
		list-style: none;
		padding-left: 0;
	}

		ul.links li {
			line-height: 2.5em;
			padding-left: 0;
		}

/* Icons */

	ul.icons {
		cursor: default;
		list-style: none;
		padding-left: 0;
	}

		ul.icons li {
			display: inline-block;
			line-height: 1em;
			padding-left: 1.5em;
		}

			ul.icons li:first-child {
				padding-left: 0;
			}

			ul.icons li a, ul.icons li span {
				font-size: 2em;
				border: 0;
			}

/* Menu */

	ul.menu {
		list-style: none;
		padding-left: 0;
	}

		ul.menu li {
			border-left: solid 1px #e0e0e0;
			display: inline-block;
			padding: 0 0 0 1em;
			margin: 0 0 0 1em;
		}

			ul.menu li:first-child {
				border-left: 0;
				margin-left: 0;
				padding-left: 0;
			}

/* Actions */

	ul.actions {
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
		cursor: default;
		list-style: none;
		margin-left: -1em;
		padding-left: 0;
	}

		ul.actions li {
			padding: 0 0 0 1em;
			vertical-align: middle;
		}

		ul.actions.special {
			-moz-justify-content: center;
			-webkit-justify-content: center;
			-ms-justify-content: center;
			justify-content: center;
			width: 100%;
			margin-left: 0;
		}

			ul.actions.special li:first-child {
				padding-left: 0;
			}

		ul.actions.stacked {
			-moz-flex-direction: column;
			-webkit-flex-direction: column;
			-ms-flex-direction: column;
			flex-direction: column;
			margin-left: 0;
		}

			ul.actions.stacked li {
				padding: 1.25em 0 0 0;
			}

				ul.actions.stacked li:first-child {
					padding-top: 0;
				}

		ul.actions.fit {
			width: calc(100% + 1em);
		}

			ul.actions.fit li {
				-moz-flex-grow: 1;
				-webkit-flex-grow: 1;
				-ms-flex-grow: 1;
				flex-grow: 1;
				-moz-flex-shrink: 1;
				-webkit-flex-shrink: 1;
				-ms-flex-shrink: 1;
				flex-shrink: 1;
				width: 100%;
			}

				ul.actions.fit li > * {
					width: 100%;
				}

			ul.actions.fit.stacked {
				width: 100%;
			}

		@media screen and (max-width: 736px) {

			ul.actions:not(.fixed) {
				-moz-flex-direction: column;
				-webkit-flex-direction: column;
				-ms-flex-direction: column;
				flex-direction: column;
				margin-left: 0;
				width: 100% !important;
			}

				ul.actions:not(.fixed) li {
					-moz-flex-grow: 1;
					-webkit-flex-grow: 1;
					-ms-flex-grow: 1;
					flex-grow: 1;
					-moz-flex-shrink: 1;
					-webkit-flex-shrink: 1;
					-ms-flex-shrink: 1;
					flex-shrink: 1;
					padding: 1em 0 0 0;
					text-align: center;
					width: 100%;
				}

					ul.actions:not(.fixed) li > * {
						width: 100%;
					}

					ul.actions:not(.fixed) li:first-child {
						padding-top: 0;
					}

					ul.actions:not(.fixed) li input[type="submit"],
					ul.actions:not(.fixed) li input[type="reset"],
					ul.actions:not(.fixed) li input[type="button"],
					ul.actions:not(.fixed) li button,
					ul.actions:not(.fixed) li .button {
						width: 100%;
					}

						ul.actions:not(.fixed) li input[type="submit"].icon:before,
						ul.actions:not(.fixed) li input[type="reset"].icon:before,
						ul.actions:not(.fixed) li input[type="button"].icon:before,
						ul.actions:not(.fixed) li button.icon:before,
						ul.actions:not(.fixed) li .button.icon:before {
							margin-left: -0.5em;
						}

		}

/* Tables */

	table {
		width: 100%;
	}

		table.default {
			width: 100%;
		}

			table.default tbody tr {
				border-bottom: solid 1px #e0e0e0;
			}

			table.default td {
				padding: 0.5em 1em 0.5em 1em;
			}

			table.default th {
				font-weight: 600;
				padding: 0.5em 1em 0.5em 1em;
				text-align: left;
			}

			table.default thead {
				background-color: #555555;
				background-image: -moz-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.15)), url("images/bg01.png");
				background-image: -webkit-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.15)), url("images/bg01.png");
				background-image: -ms-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.15)), url("images/bg01.png");
				background-image: linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.15)), url("images/bg01.png");
				color: #fff;
			}

/* Button */

	input[type="submit"],
	input[type="reset"],
	input[type="button"],
	button,
	.button {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		-moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
		-webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
		-ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
		transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
		background-image: -moz-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.15)), url("images/bg01.png");
		background-image: -webkit-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.15)), url("images/bg01.png");
		background-image: -ms-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.15)), url("images/bg01.png");
		background-image: linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.15)), url("images/bg01.png");
		background-color: #37c0fb;
		border-radius: 5px;
		border: 0;
		color: #fff;
		cursor: pointer;
		display: inline-block;
		padding: 0 1.5em;
		line-height: 2.75em;
		min-width: 9em;
		text-align: center;
		text-decoration: none;
		font-weight: 600;
		letter-spacing: -0.025em;
	}

		input[type="submit"]:hover,
		input[type="reset"]:hover,
		input[type="button"]:hover,
		button:hover,
		.button:hover {
			background-color: #50c8fc;
			color: #fff !important;
		}

		input[type="submit"]:active,
		input[type="reset"]:active,
		input[type="button"]:active,
		button:active,
		.button:active {
			background-color: #1eb8fb;
			color: #fff;
		}

		input[type="submit"].alt,
		input[type="reset"].alt,
		input[type="button"].alt,
		button.alt,
		.button.alt {
			background-color: #555555;
			color: #fff;
		}

			input[type="submit"].alt:hover,
			input[type="reset"].alt:hover,
			input[type="button"].alt:hover,
			button.alt:hover,
			.button.alt:hover {
				background-color: #626262;
			}

			input[type="submit"].alt:active,
			input[type="reset"].alt:active,
			input[type="button"].alt:active,
			button.alt:active,
			.button.alt:active {
				background-color: #484848;
			}

		input[type="submit"].icon:before,
		input[type="reset"].icon:before,
		input[type="button"].icon:before,
		button.icon:before,
		.button.icon:before {
			margin-right: 0.5em;
		}

		input[type="submit"].fit,
		input[type="reset"].fit,
		input[type="button"].fit,
		button.fit,
		.button.fit {
			width: 100%;
		}

		input[type="submit"].small,
		input[type="reset"].small,
		input[type="button"].small,
		button.small,
		.button.small {
			font-size: 0.8em;
		}

/* Box */

	.box.highlight {
		text-align: center;
	}

	.box.post {
		position: relative;
		margin: 0 0 2em 0;
	}

		.box.post:after {
			content: '';
			display: block;
			clear: both;
		}

		.box.post .inner {
			margin-left: calc(30% + 2em);
		}

			.box.post .inner > :last-child {
				margin-bottom: 0;
			}

		.box.post .image {
			width: 30%;
			margin: 0;
		}

/* Header */

	#header {
		text-align: center;
		padding: 3em 0 0 0;
		background-color: #fff;
		background-image: url("images/bg02.png"), url("images/bg02.png"), url("images/bg01.png");
		background-position: top left,					top left,					top left;
		background-size: 100% 6em,					100% 6em,					auto;
		background-repeat: no-repeat,					no-repeat,					repeat;
	}

		#header h1 {
			padding: 0 0 2.75em 0;
			margin: 0;
		}

			#header h1 a {
				font-size: 1.5em;
				letter-spacing: -0.025em;
				border: 0;
			}

	#nav {
		cursor: default;
		background-color: #333;
		background-image: -moz-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.3)), url("images/bg01.png");
		background-image: -webkit-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.3)), url("images/bg01.png");
		background-image: -ms-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.3)), url("images/bg01.png");
		background-image: linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.3)), url("images/bg01.png");
		padding: 0;
	}

		#nav:after {
			content: '';
			display: block;
			width: 100%;
			height: 0.75em;
			background-color: #37c0fb;
			background-image: url("images/bg01.png");
		}

		#nav > ul {
			margin: 0;
		}

			#nav > ul > li {
				position: relative;
				display: inline-block;
				margin-left: 1em;
			}

				#nav > ul > li a {
					color: #c0c0c0;
					text-decoration: none;
					border: 0;
					display: block;
					padding: 1.5em 0.5em 1.35em 0.5em;
				}

				#nav > ul > li:first-child {
					margin-left: 0;
				}

				#nav > ul > li:hover a {
					color: #fff;
				}

				#nav > ul > li.current {
					font-weight: 600;
				}

					#nav > ul > li.current:before {
						-moz-transform: rotateZ(45deg);
						-webkit-transform: rotateZ(45deg);
						-ms-transform: rotateZ(45deg);
						transform: rotateZ(45deg);
						width: 0.75em;
						height: 0.75em;
						content: '';
						display: block;
						position: absolute;
						bottom: -0.5em;
						left: 50%;
						margin-left: -0.375em;
						background-color: #37c0fb;
						background-image: url("images/bg01.png");
					}

					#nav > ul > li.current a {
						color: #fff;
					}

				#nav > ul > li.active a {
					color: #fff;
				}

				#nav > ul > li.active.current:before {
					opacity: 0;
				}

				#nav > ul > li > ul {
					display: none;
				}

/* Dropotron */

	.dropotron {
		background-image: -moz-linear-gradient(top, rgba(0,0,0,0.3), rgba(0,0,0,0)), url("images/bg01.png");
		background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.3), rgba(0,0,0,0)), url("images/bg01.png");
		background-image: -ms-linear-gradient(top, rgba(0,0,0,0.3), rgba(0,0,0,0)), url("images/bg01.png");
		background-image: linear-gradient(top, rgba(0,0,0,0.3), rgba(0,0,0,0)), url("images/bg01.png");
		background-color: #333;
		border-radius: 5px;
		color: #fff;
		min-width: 10em;
		padding: 1em 0;
		text-align: center;
		box-shadow: 0 1em 1em 0 rgba(0, 0, 0, 0.5);
		list-style: none;
	}

		.dropotron > li {
			line-height: 2em;
			padding: 0 1.1em 0 1em;
		}

			.dropotron > li > a {
				color: #c0c0c0;
				text-decoration: none;
				border: 0;
			}

			.dropotron > li.active > a, .dropotron > li:hover > a {
				color: #fff;
			}

		.dropotron.level-0 {
			border-radius: 0 0 5px 5px;
			font-size: 0.9em;
			padding-top: 0;
			margin-top: -1px;
		}

/* Banner */

	#banner {
		background-image: url("../../images/banner.jpg");
		background-position: center center;
		background-size: cover;
		height: 28em;
		text-align: center;
		position: relative;
	}

		#banner header {
			position: absolute;
			bottom: 0;
			left: 0;
			width: 100%;
			background: #212121;
			background: rgba(27, 27, 27, 0.75);
			color: #fff;
			padding: 1.5em 0;
		}

			#banner header h2 {
				display: inline-block;
				margin: 0;
				font-size: 1.25em;
				vertical-align: middle;
			}

				#banner header h2 em {
					opacity: 0.75;
				}

				#banner header h2 a {
					border-bottom-color: rgba(255, 255, 255, 0.5);
				}

					#banner header h2 a:hover {
						border-bottom-color: transparent;
					}

			#banner header .button {
				vertical-align: middle;
				margin-left: 1em;
			}

/* Wrapper */

	.wrapper {
		padding: 5em 0 3em 0;
	}

		.wrapper.style1 {
			background: #fff;
		}

		.wrapper.style2 {
			background-color: #fff;
			background-image: url("images/bg02.png"), url("images/bg03.png"), url("images/bg01.png");
			background-position: top left,						bottom left,					top left;
			background-size: 100% 6em,						100% 6em,						auto;
			background-repeat: no-repeat,						no-repeat,						repeat;
		}

		.wrapper.style3 {
			background-color: #37c0fb;
			background-image: -moz-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.15)), url("images/bg01.png");
			background-image: -webkit-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.15)), url("images/bg01.png");
			background-image: -ms-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.15)), url("images/bg01.png");
			background-image: linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.15)), url("images/bg01.png");
			color: #fff;
		}

			.wrapper.style3 .button {
				background: #fff;
				color: #474747;
			}

				.wrapper.style3 .button:hover {
					color: #37c0fb !important;
				}

/* CTA */

	#cta {
		text-align: center;
		padding: 3.5em 0;
	}

		#cta header h2 {
			display: inline-block;
			vertical-align: middle;
			margin: 0;
		}

		#cta header .button {
			vertical-align: middle;
			margin-left: 1em;
		}

/* Footer */

	#footer {
		padding: 4em 0 8em 0;
	}

		#footer a {
			color: inherit;
			border-bottom-color: rgba(71, 71, 71, 0.25);
		}

			#footer a:hover {
				color: #37c0fb;
				border-bottom-color: transparent;
			}

		#footer .container {
			margin-bottom: 4em;
		}

		#footer .icons {
			text-align: center;
			margin: 0;
		}

			#footer .icons a {
				color: #999;
			}

				#footer .icons a:hover {
					color: #474747;
				}

		#footer .copyright {
			color: #999;
			margin-top: 1.5em;
			text-align: center;
			font-size: 0.9em;
		}

/* Wide */

	@media screen and (max-width: 1680px) {

		/* Basic */

			body, input, select, textarea {
				font-size: 14pt;
				line-height: 1.5em;
			}

		/* Banner */

			#banner {
				height: 24em;
			}

	}

/* Normal */

	@media screen and (max-width: 1280px) {

		/* Basic */

			body, input, select, textarea {
				font-size: 13pt;
				line-height: 1.5em;
			}

		/* Lists */

			ol {
				padding-left: 1.25em;
			}

				ol li {
					padding-left: 0.25em;
				}

		/* Icons */

			ul.icons li a, ul.icons li span {
				font-size: 1.5em;
			}

		/* Header */

			#header {
				padding: 2em 0 0 0;
			}

				#header h1 {
					padding: 0 0 1.75em 0;
				}

		/* Banner */

			#banner {
				height: 20em;
			}

		/* Wrapper */

			.wrapper {
				padding: 3em 0 1em 0;
			}

		/* CTA */

			#cta {
				padding: 2em 0;
			}

		/* Footer */

			#footer {
				padding: 3em 0 3em 0;
			}

				#footer .container {
					margin-bottom: 1em;
				}

	}

/* Narrow */

	@media screen and (max-width: 980px) {

		/* Basic */

			body, input, select, textarea {
				font-size: 12pt;
				line-height: 1.5em;
			}

	}

/* Narrower */

	#navPanel, #titleBar {
		display: none;
	}

	@media screen and (max-width: 840px) {

		/* Basic */

			html, body {
				overflow-x: hidden;
			}

			body, input, select, textarea {
				font-size: 13pt;
			}

			h1, h2, h3, h4, h5, h6 {
				margin-bottom: 0.5em;
			}

			header p {
				margin-top: -0.75em;
			}

			header.major {
				text-align: center;
				margin: 0 0 2em 0;
			}

				header.major h2 {
					font-size: 1.75em;
				}

				header.major p {
					top: -0.25em;
					font-size: 1.25em;
				}

		/* Box */

			.box.highlight {
				text-align: left;
				position: relative;
				padding-left: 7em;
			}

				.box.highlight i {
					position: absolute;
					margin: 0;
					left: 0;
					top: 0.25em;
				}

			.box.post .inner {
				margin-left: calc(20% + 2em);
			}

			.box.post .image {
				width: 20%;
			}

		/* Header */

			#header {
				display: none;
			}

		/* Banner */

			#banner {
				height: 20em;
			}

				#banner header h2 {
					display: block;
				}

				#banner header .button {
					margin: 1em 0 0 0;
				}

		/* CTA */

			#cta {
				padding: 1.5em 0;
			}

				#cta header h2 {
					display: block;
				}

				#cta header .button {
					margin: 1em 0 0 0;
				}

		/* Footer */

			#footer {
				text-align: center;
			}

				#footer .container {
					margin-bottom: 4em;
				}

				#footer form .actions {
					-moz-justify-content: center;
					-webkit-justify-content: center;
					-ms-justify-content: center;
					justify-content: center;
					width: 100%;
					margin-left: 0;
				}

					#footer form .actions li:first-child {
						padding-left: 0;
					}

		/* Nav */

			#page-wrapper {
				-moz-backface-visibility: hidden;
				-webkit-backface-visibility: hidden;
				-ms-backface-visibility: hidden;
				backface-visibility: hidden;
				-moz-transition: -moz-transform 0.5s ease;
				-webkit-transition: -webkit-transform 0.5s ease;
				-ms-transition: -ms-transform 0.5s ease;
				transition: transform 0.5s ease;
				padding-bottom: 1px;
				padding-top: 44px;
			}

			#titleBar {
				-moz-backface-visibility: hidden;
				-webkit-backface-visibility: hidden;
				-ms-backface-visibility: hidden;
				backface-visibility: hidden;
				-moz-transition: -moz-transform 0.5s ease;
				-webkit-transition: -webkit-transform 0.5s ease;
				-ms-transition: -ms-transform 0.5s ease;
				transition: transform 0.5s ease;
				display: block;
				height: 44px;
				left: 0;
				position: fixed;
				top: 0;
				width: 100%;
				z-index: 10001;
				background-color: #333;
				background-image: -moz-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.3)), url("images/bg01.png");
				background-image: -webkit-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.3)), url("images/bg01.png");
				background-image: -ms-linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.3)), url("images/bg01.png");
				background-image: linear-gradient(top, rgba(0,0,0,0), rgba(0,0,0,0.3)), url("images/bg01.png");
				height: 44px;
				line-height: 44px;
				box-shadow: 0 4px 0 0 #37c0fb;
			}

				#titleBar .title {
					display: block;
					position: relative;
					font-weight: 600;
					text-align: center;
					color: #fff;
					z-index: 1;
				}

					#titleBar .title em {
						font-style: normal;
						font-weight: 300;
					}

				#titleBar .toggle {
					text-decoration: none;
					border: 0;
					height: 60px;
					left: 0;
					position: absolute;
					top: 0;
					width: 80px;
					z-index: 2;
				}

					#titleBar .toggle:before {
						-moz-osx-font-smoothing: grayscale;
						-webkit-font-smoothing: antialiased;
						display: inline-block;
						font-style: normal;
						font-variant: normal;
						text-rendering: auto;
						line-height: 1;
						text-transform: none !important;
						font-family: 'Font Awesome 5 Free';
						font-weight: 900;
					}

					#titleBar .toggle:before {
						content: '\f0c9';
						display: block;
						height: 44px;
						line-height: inherit;
						text-align: center;
						width: 44px;
						color: #fff;
						opacity: 0.5;
					}

					#titleBar .toggle:active:before {
						opacity: 0.75;
					}

			#navPanel {
				background-color: #1f1f1f;
				box-shadow: inset -1px 0 3px 0 rgba(0, 0, 0, 0.5);
				background-image: -moz-linear-gradient(left, rgba(0,0,0,0) 75%, rgba(0,0,0,0.15)), url("images/bg01.png");
				background-image: -webkit-linear-gradient(left, rgba(0,0,0,0) 75%, rgba(0,0,0,0.15)), url("images/bg01.png");
				background-image: -ms-linear-gradient(left, rgba(0,0,0,0) 75%, rgba(0,0,0,0.15)), url("images/bg01.png");
				background-image: linear-gradient(left, rgba(0,0,0,0) 75%, rgba(0,0,0,0.15)), url("images/bg01.png");
				-moz-backface-visibility: hidden;
				-webkit-backface-visibility: hidden;
				-ms-backface-visibility: hidden;
				backface-visibility: hidden;
				-moz-transform: translateX(-275px);
				-webkit-transform: translateX(-275px);
				-ms-transform: translateX(-275px);
				transform: translateX(-275px);
				-moz-transition: -moz-transform 0.5s ease;
				-webkit-transition: -webkit-transform 0.5s ease;
				-ms-transition: -ms-transform 0.5s ease;
				transition: transform 0.5s ease;
				display: block;
				height: 100%;
				left: 0;
				overflow-y: auto;
				position: fixed;
				top: 0;
				width: 275px;
				z-index: 10002;
			}

				#navPanel .link {
					border-bottom: 0;
					border-top: solid 1px rgba(255, 255, 255, 0.05);
					color: #888;
					display: block;
					height: 48px;
					line-height: 48px;
					padding: 0 1em 0 1em;
					text-decoration: none;
				}

					#navPanel .link:first-child {
						border-top: 0;
					}

					#navPanel .link.depth-0 {
						color: #fff;
					}

					#navPanel .link .indent-1 {
						display: inline-block;
						width: 1em;
					}

					#navPanel .link .indent-2 {
						display: inline-block;
						width: 2em;
					}

					#navPanel .link .indent-3 {
						display: inline-block;
						width: 3em;
					}

					#navPanel .link .indent-4 {
						display: inline-block;
						width: 4em;
					}

					#navPanel .link .indent-5 {
						display: inline-block;
						width: 5em;
					}

			body.navPanel-visible #page-wrapper {
				-moz-transform: translateX(275px);
				-webkit-transform: translateX(275px);
				-ms-transform: translateX(275px);
				transform: translateX(275px);
			}

			body.navPanel-visible #titleBar {
				-moz-transform: translateX(275px);
				-webkit-transform: translateX(275px);
				-ms-transform: translateX(275px);
				transform: translateX(275px);
			}

			body.navPanel-visible #navPanel {
				-moz-transform: translateX(0);
				-webkit-transform: translateX(0);
				-ms-transform: translateX(0);
				transform: translateX(0);
			}

	}

/* Mobile */

	@media screen and (max-width: 736px) {

		/* Basic */

			body, input, select, textarea {
				font-size: 11pt;
				line-height: 1.35em;
			}

			h2 {
				font-size: 1.25em;
				letter-spacing: 0;
				line-height: 1.35em;
			}

			h3 {
				font-size: 1em;
				letter-spacing: 0;
				line-height: 1.35em;
			}

			header p {
				margin-top: -0.5em;
				font-size: 1em;
			}

			header.major {
				padding: 0 20px;
			}

				header.major h2 {
					font-size: 1.25em;
				}

				header.major p {
					top: 0;
					margin-top: 1.25em;
					font-size: 1em;
				}

		/* Menu */

			ul.menu li {
				border: 0;
				padding: 0;
				margin: 0;
				display: block;
				line-height: 2em;
			}

		/* Banner */

			#banner {
				height: 18em;
			}

		/* Wrapper */

			.wrapper {
				padding: 2em 0 1px 0;
			}

	}

/* Mobile (Portrait) */

	@media screen and (max-width: 480px) {

		/* Icon */

			.icon.major {
				width: 4em;
				height: 4em;
				line-height: 4em;
				box-shadow: 0 0 0 7px white, 0 0 0 8px #e0e0e0;
			}

				.icon.major:before {
					font-size: 24px;
				}

		/* Button */

			input[type="submit"],
			input[type="reset"],
			input[type="button"],
			button,
			.button {
				width: 100%;
				display: block;
			}

		/* Box */

			.box.highlight {
				padding-left: calc(4em + 30px);
			}

			.box.post .inner {
				margin-left: calc(30% + 20px);
			}

			.box.post .image {
				width: 30%;
			}

		/* Banner */

			#banner {
				height: 20em;
			}

				#banner header {
					padding: 20px;
				}

		/* Wrapper */

			.wrapper {
				padding: 2em 20px 1px 20px;
			}

		/* CTA */

			#cta {
				padding: 20px;
			}

		/* Footer */

			#footer {
				padding: 2em 20px;
				text-align: left;
			}

	}
	</style>