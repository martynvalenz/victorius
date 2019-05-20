<template>
	<div>
		<v-content style="background-color: #FFAB00">
		    <v-container fluid fill-height>
		        <v-layout align-center justify-center>
		            <v-flex xs12 sm8 md4>
		            	<h3>Suscríbete a nuestro Boletín</h3>
		            	<v-form @submit.prevent="sendNewsletter">
		                    <v-text-field 
		                    	color="amber darken-2"
		                    	v-model="newsletter"
		                    	type="email"
		                    	solo 
		                    	append-icon="fas fa-paper-plane" 
		                    	@click:append="sendNewsletter"
		                    	name="login" 		                    	
		                    	label="E-mail">
		                    </v-text-field>
		                    <span class="red--text" v-if="errors.email">{{ errors.email[0] }}</span>
			            </v-form>
		            </v-flex>
		        </v-layout>
		    </v-container>
		</v-content>
		<!-- <v-snackbar
			v-model="Notification"
			multi-line
			:timeout="timeout"
			vertical
			top
			bottom
			color="green"
			>
			{{ NotificationText }}
			<v-btn
			  color="white"
			  flat
			  @click="Notification = false"
			  >
			  Cerrar
			</v-btn>
	    </v-snackbar> -->
	    <v-content id="contacto" style="background-color: #f2f2f2; padding-left: 5px; padding-right: 5px; padding-top: 48px; padding-bottom: 48px;">
	    	<v-container>
	    		<v-layout align-center justify-center row wrap>
	    			<v-flex xs12 sm12 md12>
	    				<h1 class="centered">Contacto</h1>
						<h3 class="centered"></h3>
	    			</v-flex>
	    		</v-layout>
	    		<br>
	    		<br>
	    		<v-layout row wrap>
	    			<v-flex xs12 sm12 md6 lg6 xl6>
	    				<h4>Victorius <br>
	    				Dirección
	    				</h4>
	    				<h4>
	    					<span>Contacto: +52 614 123 4567</span><br>
	    					<a href="mailto:gpovictorius@outlook.com">gpovictorius@outlook.com</a>
	    				</h4>
	    				<br>
	    				<iframe width="98%" height="350" class="centered" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJMZYhmbxc6oYRySySA3TX_o0&key=AIzaSyBN1q_gPSKedvNCqDXmkb2qLI2Sl587f_g" allowfullscreen></iframe>
	    			</v-flex>
		            <v-flex xs12 sm12 md6 lg6 xl6>
		            	<v-form @submit.prevent="contactar">
			                <v-card class="">
			                    <v-toolbar>
			                        <v-toolbar-title>Contáctanos</v-toolbar-title>
			                    </v-toolbar>
			                    <v-card-text>
			                    	<span class="red--text" v-if="contact_errors.name">{{ contact_errors.name[0] }}</span>
		                            <v-text-field v-model="contact_name" solo color="amber darken-2" append-icon="person" label="Nombre completo" type="text"></v-text-field>
		                            <span class="red--text" v-if="contact_errors.email">{{ contact_errors.email[0] }}</span>
		                            <v-text-field v-model="contact_email" solo color="amber darken-2"  append-icon="email" label="E-mail" type="text"></v-text-field>
		                            <span class="red--text" v-if="contact_errors.telephone">{{ contact_errors.telephone[0] }}</span>
		                            <v-text-field v-model="contact_telephone" solo color="amber darken-2" mask="(###) ### - ####" append-icon="phone" label="Teléfono" type="text"></v-text-field>
		                            <span class="red--text" v-if="contact_errors.message">{{ contact_errors.message[0] }}</span>
		                            <v-textarea
		                            	v-model="contact_message"
										outline
										auto-grow
										color="amber darken-2"
										label="Mensaje"
							        ></v-textarea>
							        
			                    </v-card-text>
			                    <v-card-actions>
									<v-btn block type="submit" dark color="amber darken-2">Enviar Mensaje <i style="padding-left: .5em" class="fas fa-paper-plane"></i></v-btn>
								</v-card-actions>
			                </v-card>
		            	</v-form>
		            </v-flex>
	    		</v-layout>
	    	</v-container>
	    </v-content>
	</div>
</template>

<script>
	export default{
		data(){
			return{
				newsletter: '',
				validaNewsletter: false,
				errors: {},
				contact_errors: {},
				timeout: 6000,
				contact_name: '',
				contact_email: '',
				contact_telephone: '',
				contact_message: ''
			}
		},

		methods:
		{
			sendNewsletter()
			{
				axios.post('/api/newsletter', {email: this.newsletter})
				.then(res => 
				{
					// this.Notification = true;
					// this.NotificationText = 'Se realizó la inscripción exitosamente.';
					this.$toastr.success('Se realizó la inscripción exitosamente, a continuación recibirás un correo de bienvenida.', 'Newsletter')
					this.newsletter = '';
					this.errors = {};

				})
				.catch(error => this.errors = error.response.data.errors)
			},

			contactar()
			{
				// var mensaje

				// mensaje = {name: this.contact_name, email: this.contact_email, telephone: this.contact_telephone, message: this.contact_message}

				// console.log(mensaje)
				axios.post('/api/send', {name: this.contact_name, email: this.contact_email, telephone: this.contact_telephone, message: this.contact_message})
				.then(res => 
				{
					this.contact_name = '';
					this.contact_email = '';
					this.contact_telephone = '';
					this.contact_message = '';
					this.contact_errors = {};
					this.NotificationText = 'Se envió el mensaje exitosamente.';
					this.Notification = true;
				})
				.catch(error => this.contact_errors = error.response.data.errors)
			}
		}
	};
</script>