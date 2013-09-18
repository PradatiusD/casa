# Fix URLs so that clicking on English/Spanish
# goes to the same page but different language

fixURLs = () ->
	englishURLs = ['index', 'about','how-casa-caridad-works','Recipient-stories','donate']
	spanishURLs = ['index-es','intro','como-lo-hacemos','vidas-de-nuestros-recipientes','donaciones']

	$('.language a').click ->

		if $(this).index() == 0
			for i in spanishURLs
				proposition = document.URL.indexOf(i) > 0
				if proposition == true
					window.location = "http://casacaridad.org/"+ englishURLs[_i] + ".php"
		else 
			for j in englishURLs
				proposition = document.URL.indexOf(j) > 0
				if proposition == true
					window.location = "http://casacaridad.org/"+ spanishURLs[_j] + ".php"


		return false


fixURLs()