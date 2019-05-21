<template>
	<div class="parallaxer">
		<!-- <carousel-header></carousel-header> -->
		<parallax-header></parallax-header>

		<div id="torneos" style="background-color: black; padding-top: 48px; padding-bottom: 48px;">
			<v-content>
				<v-container >
					<v-layout align-center justify-center row wrap>
						<v-flex xs12 sm12 md12 lg12>
							<h1 class="content-title centered" style="color: white">Torneos</h1>
							<h4 class="content-desc centered" style="color: white">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur eros dolor,<br />
								sed bibendum turpis luctus eget
							</h4>
						</v-flex>
					</v-layout>
					<v-layout align-center justify-center row wrap>
						<v-flex xs12 sm12 md6 lg3>
							<img src="/images/logos/logo nuevo letra blanca.png" alt="Tocho" style="height:250px">
						</v-flex>
						<v-flex xs12 sm12 md6 lg9>
							<h5 style="color: white">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
								Vestibulum posuere augue eget ante porttitor fringilla. 
								Aliquam laoreet, sem eu dapibus congue, velit justo ullamcorper urna, 
								non rutrum dolor risus non sapien. Vivamus vel tincidunt quam. 
								Donec ultrices nisl ipsum, sed elementum ex dictum nec. 
							</h5>
						<div class="text-xs-center">
							<v-btn color="amber accent-4">Ver más</v-btn>
						</div>
						</v-flex>
						
					</v-layout>
					<v-layout align-center justify-center row wrap>
						<v-flex xs12 sm12 md6 lg3>
							<img src="/images/logos/pre-copeo-soccer.png" alt="Soccer" style="height:250px">
						</v-flex>
						<v-flex xs12 sm12 md6 lg9>
							<h5 style="color: white">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
								Vestibulum posuere augue eget ante porttitor fringilla. 
								Aliquam laoreet, sem eu dapibus congue, velit justo ullamcorper urna, 
								non rutrum dolor risus non sapien. Vivamus vel tincidunt quam. 
								Donec ultrices nisl ipsum, sed elementum ex dictum nec. 
							</h5>
						<div class="text-xs-center">
							<v-btn color="amber accent-4">Ver más</v-btn>
						</div>
						</v-flex>
						
					</v-layout>
				</v-container>
			</v-content>
		</div>

		<div id="patrocinadores" style="background-color: #333333; padding-top: 48px; padding-bottom: 48px;">
			<template>
				<v-content>
					<v-container >
						<v-layout align-center justify-center row wrap>
							<v-flex xs12 sm12 md12 lg12>
								<h1 class="content-title centered" style="color: white">Patrocindores</h1>
								<h4 class="content-desc justify" style="color: white">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</h4>
							</v-flex>
						</v-layout>
					</v-container>
				</v-content>
			    <v-item-group>
			        <v-container grid-list-md>
			            <v-layout wrap>
			                <v-flex
			                    v-for="logo in logos"
			                    :key="index"
			                    xs12
			                    md4
			                    lg4
			                    >
			                    <v-item>
			                        <v-card
			                            class="d-flex align-center"
			                            dark
			                            height="200"
			                            >
			                            <v-img
								          :src="logo.image"
								          aspect-ratio="2" height="200" width="auto"
								        ></v-img>
			                        </v-card>
			                    </v-item>
			                </v-flex>
                            <!-- <v-flex
                                v-for="logo in logos"
                                :key="index"
                                xs12
                                md2
                                lg1
                                >
                                <v-item>
                                    <v-card
                                        class="d-flex align-center"
                                        dark
                                        height="80"
                                        >
                                        <v-img
            					          :src="logo.image"
            					          aspect-ratio="1" height="80" width="auto"
            					        ></v-img>
                                    </v-card>
                                </v-item>
                            </v-flex> -->
			            </v-layout>
			        </v-container>
			    </v-item-group>
			</template>
		</div>

		<div id="aplicaciones" style="background-color: #FFAB00; padding-top: 48px; padding-bottom: 48px;">
			<v-content>
				<v-container >
					<v-layout align-center justify-center row wrap>
						<v-flex xs12 sm12 md12 lg12>
							<h1 class="content-title centered" style="color: white">Descarga Nuestra App</h1>
							<h4 class="content-desc justify" style="color: white">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</h4>
						</v-flex>
					</v-layout>
					<v-layout align-center justify-center row wrap>
						<v-flex xs12 sm12 md12 lg12>
							<div class="text-xs-center">
								<v-btn large color="black" dark><i class="fab fa-google-play" style="padding-right: 1em;"></i> PLAY STORE</v-btn>
								<v-btn large color="black" dark><i class="fab fa-apple" style="padding-right: 1em;"></i> APP STORE</v-btn>
							</div>
						</v-flex>
						
					</v-layout>
				</v-container>
			</v-content>
		</div>
		
	</div>
</template>

<script>
	
	import CarouselHeader from './CarouselHeader'
	import ParallaxHeader from './ParallaxHeader'

	export default{

		components: {CarouselHeader, ParallaxHeader},

		data(){
			return{
				logos:[
					{image: 'https://image.freepik.com/free-vector/luxury-letter-e-logo-design_1017-8903.jpg'},
					{image: 'http://www.webcoderskull.com/img/logo.png'},
					{image: 'https://image.freepik.com/free-vector/3d-box-logo_1103-876.jpg'},
					{image: 'https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg'},
					{image: 'https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg'},
					{image: 'https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg'},
					{image: 'https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg'},
					{image: 'https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg'},
					{image: 'https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg'}
				]
			}
		}
	};
</script>

<style>
	.parallaxer{
		padding-top: 48px;
	}
</style>