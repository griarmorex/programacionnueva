$(
	function ()
	{
		$("body").append(
			$("<nav>").attr({"class":"navbar navbar-inverse navbar-fixed-top"}).append(
				$("<div>").attr({"class":"container"}).append(
					$("<div>").attr({"class":"navbar-header"}).append(
						$("<button>").attr({"type":"button", "class":"navbar-toggle collapsed", "data-toggle":"collapse", "data-target":"#navbar", "aria-expanded":"false", "aria-controls":"navbar"}).append(
							$("<span>").attr({"class":"sr-only"}).text("Toggle navigation"),
							$("<span>").attr({"class":"icon-bar"}),
							$("<span>").attr({"class":"icon-bar"}),
							$("<span>").attr({"class":"icon-bar"})
						),
						$("<a>").attr({"class":"navbar-brand", "href":"#"}).text("App Personas")
					),
					$("<div>").attr({"class":"collapse navbar-collapse", "id":"navbar"}).append(
						$("<ul>").attr({"class":"nav navbar-nav"}).append(
							$("<li>").attr({"class":"inicio"}).append( $("<a>").text("Inicio").attr({"id":"a-inicio"}) ),
							$("<li>").append( $("<a>").text( "Nuevo"     ).attr({"id":"a-nuevo"   }) ),
							$("<li>").append( $("<a>").text( "Contacto"  ).attr({"id":"a-contacto"}) ),
							$("<li>").append( $("<a>").text( "Servicio"  ).attr({"id":"a-servicio"}) ),
							$("<li>").append( $("<a>").text( "Productos" ).attr({"id":"a-producto"}) )
						)
					)
				)
			),
			$("<div>").attr({"class":"container"}).append(
				$("<div>").attr({"class":"row"}).append(
					$("<div>").attr({"class":"col-md-8"}).append(
						$("<h1>").text("Personas")
					),
					$("<div>").attr({"class":"col-md-4"})

				)
			)
		);

		$("#a-inicio").on("click", function(){
			//alert("Inicio");
			herramienta.saluda();
			herramienta.getNombre();
			herramienta.input("body");
		});
		$("#a-nuevo").on("click", function(){
			alert("Nuevo");
		});
		$("#a-contacto").on("click", function(){
			alert("Contacto");
		});
		$("#a-servicio").on("click", function(){
			alert("Servicio");
		});
		$("#a-producto").on("click", function(){
			alert("Producto");
		});
	}
);