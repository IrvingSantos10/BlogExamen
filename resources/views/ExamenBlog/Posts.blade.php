@extends('ExamenBlog.template.Layout')
@section('Publicaciones')
<section class="about-us" id="about-us">

    <h1>
        ¿Que son los sistemas de información?
    </h1>
    <hr />
    <p class="title" id="DatosP">
        Sistema de información se entiende como el conjunto de tecnologías, procesos, aplicaciones de negocios y software disponibles para las personas dentro de una organización.
        Un sistema de información es un conjunto de componentes que interactúan entre sí con un fin común. En informática, los sistemas de información ayudan a administrar, recolectar, recuperar, procesar, almacenar y distribuir información relevante para los procesos fundamentales y las particularidades de cada organización. La importancia de un sistema de información radica en la eficiencia en la correlación de una gran cantidad de datos ingresados a través de procesos diseñados para cada área con el objetivo de producir información válida para la posterior toma de decisiones.
    </p>
    <br>
    <div>
        <img id="ClienteSE" src="img/publicaciones/SistemaDeInformacion.jpg" alt="">
    </div>
    <p id="DatosP">
        Un sistema de información se destaca por su diseño, facilidad de uso, flexibilidad, mantenimiento automático de los registros, apoyo en toma de decisiones críticas y mantener el anonimato en informaciones irrelevantes.
        Todos estos elementos interactúan para procesar los datos (incluidos los procesos manuales y automáticos) y dan lugar a información más elaborada, que se distribuye de la manera más adecuada posible en una determinada organización, en función de sus objetivos. <br><br> Si bien la existencia de la mayor parte de sistemas de información son de conocimiento público, recientemente se ha revelado que desde finales del siglo XX diversos gobiernos han instaurado sistemas de información para el espionaje de carácter secreto.
        Habitualmente el término "sistema de información" se usa de manera errónea como sinónimo de sistema de información informático, en parte porque en la mayoría de los casos los recursos materiales de un sistema de información están constituidos casi en su totalidad por sistemas informáticos. Estrictamente hablando, un sistema de información no tiene por qué disponer de dichos recursos (aunque en la práctica esto no suela ocurrir). Se podría decir entonces que los sistemas de información informáticos son una subclase o un subconjunto de los sistemas de información en general. <br><br>

        Tipos de sistemas de información <br><br>
        Desde un punto de vista empresarial u organizativo, los sistemas de información pueden clasificarse en: <br><br>

        Sistemas de Procesamiento de Transacciones (TPS). También conocidos como sistemas de gestión operativa, recopilan la información pertinente a las transacciones de la organización, es decir, de su funcionamiento. <br>
        Sistemas de Información Ejecutiva (EIS). Monitoriza las variables gerenciales de un área específica de la organización, a partir de la información interna y externa de la misma. <br>
        Sistemas de Información Gerencial (MIS). Contemplan la información general de la organización y la comprenden como un todo. <br>
        Sistemas de soporte de decisiones (DSS). Orientados al procesamiento de información intra y extra organizacional, para el apoyo en la conducción de la empresa. <br>
        Existen otras formas especializadas o aplicadas de SI, dependiendo del campo puntual y de las funciones específicas que se esperan de cada uno. Sería demasiado extenso enlistarlas a todas. <br><br>

        Elementos de un sistema de información <br> <br>
        Por lo general se considera que todos los SI contienen una diversidad de elementos clasificables en cinco grandes categorías: <br><br>

        Elementos financieros. Aquellos vinculados con el capital y con los activos disponibles de la organización. <br> 
        Elementos tecnológicos. Aquellos que tienen que ver con la maquinaria especializada y la capacidad de procesamiento automatizado de la información. <br>
        Elementos humanos. Básicamente, personal, tanto especializado y directivo, como no especializado o común. <br>
        Elementos materiales. Se refiere al emplazamiento del sistema, a su soporte físico y ubicación. <br>
        Elementos administrativos. Aquellos relacionados con los procesos, la mecánica de conducción, los permisos, informes, transacciones, etc. <br><br>
        
        Algunos ejemplos de SI pueden ser: <br><br>

        Los sistemas de control de calidad. En los que se pide una retroalimentación al cliente y se evalúan los resultados estadísticamente para elaborar resultados interpretables por la gerencia. <br>
        Las bases de datos de una biblioteca. En donde está contenido el grueso volumen de documentos (libros, revistas, tesis, etc.) de la biblioteca, en función de ubicar y recuperar cada uno lo más rápida y precisamente posible. <br>
        Las hojas de cálculo. En las que se ingresa información en bruto y se la organiza de manera cuantificable para obtener directrices de conducción financiera. <br>
    </p>
    <br>
    <p id="DatosP">
    Bibliografia <br>Titulo; {{$bibliografia2 -> titulo}} <br> Autor; {{$bibliografia2 -> autor}} <br> Url; {{$bibliografia2 -> url}} <br> Año; {{$bibliografia2 -> año}} <br>
    </p>
    <br><br><br>
</section>
<div class="barra"></div>



<section class="about-us" id="about-us">

    <h1>
        Evolucion de los Sistemas de Informacion
    </h1>
    <hr/> <br>
    <div>
        <img id="ClienteS" src="img/publicaciones/SistemaInformatico.jpg" alt="">
    </div>
    <p id="DatosP">
        1950 - 1960: procesamiento de datos electrónicos, sistema de procesamiento de transacciones <br> <br>
        Durante este período, el papel de SI fue principalmente para realizar actividades como el procesamiento de transacciones, el mantenimiento de registros y la contabilidad. SI se utilizó principalmente para el procesamiento electrónico de datos. <br>
        EDP ​​se describe como el uso de computadoras para registrar, clasificar, manipular y resumir datos. También se llama procesamiento de información o procesamiento de datos automático. <br>
        Sistema de procesamiento de transacciones (TPS) fue el primer sistema computarizado desarrollado para procesar datos comerciales. TPS estaba principalmente dirigido al personal administrativo de una organización. El TPS inicial utilizaba datos de procesamiento por lotes que se acumularon durante un período y todas las transacciones se procesaron posteriormente. <br>
        TPS recopila, almacena, modifica y recupera las transacciones diarias de una organización. Por lo general, TPS informatiza o automatiza un proceso manual existente para permitir un procesamiento más rápido, un mejor servicio al cliente y costos administrativos reducidos. Ejemplos de productos de TPS son los depósitos en efectivo, el cajero automático (ATM), la orden de pago y los sistemas contables. TPS también se conoce como procesamiento de transacciones o procesamiento en tiempo real.
    </p>
    <br>
    <p id="DatosP">
        1960 a 1970: Sistemas de información gerencial <br><br>
        Durante esta era, el rol de SI evolucionó desde TPS hasta Management Information Systems (MSI) o Sistemas de información gerenciales. MSI procesa los datos en informes informativos útiles y proporciona a los gerentes las herramientas para organizar evaluar y administrar de manera eficiente los departamentos dentro de una organización. MSI entrega información en forma de pantallas e informes preespecificados para respaldar la toma de decisiones empresariales. Algunos ejemplos de resultados de MSI son los sistemas de informes de tendencias de costos, análisis de ventas y rendimiento de producción. <br> <br>
        Por lo general, MSI genera tres tipos básicos de información que son: <br><br>
        Los informes detallados de información típicamente confirman las actividades de procesamiento de transacciones. Un informe de pedido detallado es un ejemplo de informe detallado. <br>
        La información resumida establece datos en un formato que un individuo puede revisar rápido y fácilmente. <br>
        Información mediante el filtrado de datos es uno de excepción. Los informes de excepciones ayudan a los gerentes a ahorrar tiempo porque no tienen que buscar en un informe detallado las excepciones. <br>
        Este período también marcó el desarrollo cuando el enfoque de las organizaciones cambió lentamente de la mera automatización de los procesos comerciales básicos a la consolidación del control dentro de la función de procesamiento de datos. <br>
    </p>
    <br>
    <p id="DatosP">
        1970 a 1980: Sistemas de soporte de decisiones <br> <br>
        En esta era, un avance importante fue la introducción de las computadoras personales (PC). Con la introducción de las PC, se produjo la distribución de la potencia informática o de procesamiento en toda la organización. La función de SI está fuertemente asociada con la administración en lugar de un enfoque técnico en una organización. El papel se centró en el "sistema interactivo basado en computadoras" para ayudar a los responsables de la toma de decisiones a resolver problemas. <br><br>
        Este nuevo rol de los sistemas de información para proporcionar soporte ad-hoc interactivo para el proceso de toma de decisiones a los gerentes y otros profesionales de negocios se denomina Sistemas de Soporte de Decisiones (DSS). DSS sirve el nivel de planificación, gestión y operaciones de una organización, por lo general, la alta dirección. <br><br>
        DSS usa datos de fuentes internas y / o externas. Las fuentes internas de datos pueden incluir datos de inventario, ventas, fabricación o financieros de la base de datos de una organización. Las fuentes externas podrían incluir precios, tasas de interés, población o tendencias. Los gerentes usan DSS para manipular los datos y ayudar con las decisiones. Los ejemplos de DSS son cifras de ingresos proyectadas basadas en suposiciones de ventas de nuevos productos, precios de productos y sistemas de análisis de riesgos. <br>
    </p>
    <br>
    <p id="DatosP">
        1980 a 1990: Sistemas de información ejecutivo <br><br>
        Este período dio lugar a la informática departamental debido a que muchas organizaciones compran su propio hardware y software para satisfacer sus necesidades departamentales. En lugar de esperar el apoyo indirecto del departamento de servicio corporativo centralizado, los empleados podrían usar sus propios recursos para respaldar sus requisitos laborales. Esta tendencia dio lugar a nuevos desafíos de incompatibilidad de datos, integridad y conectividad en diferentes departamentos. Además, los altos ejecutivos no usaban DSS ni MSI, por lo que se desarrollaron sistemas de información ejecutivo (ESI) o sistemas de soporte ejecutivo (ESS). <br><br>
        ESI ofrece servicios de toma de decisiones a los ejecutivos a través del suministro de información interna y externa relevante para cumplir los objetivos estratégicos de la organización. A veces se consideran como una forma específica de DSS. Los ejemplos del ESI son sistemas para facilitar el acceso a las acciones de todos los competidores, desarrollos económicos para respaldar la planificación estratégica y el análisis del desempeño del negocio. <br><br>
    </p>
    <br>
    <p id="DatosP">
        1980 a 1990: Sistemas de información ejecutivo <br><br>
        Este período dio lugar a la informática departamental debido a que muchas organizaciones compran su propio hardware y software para satisfacer sus necesidades departamentales. En lugar de esperar el apoyo indirecto del departamento de servicio corporativo centralizado, los empleados podrían usar sus propios recursos para respaldar sus requisitos laborales. Esta tendencia dio lugar a nuevos desafíos de incompatibilidad de datos, integridad y conectividad en diferentes departamentos. Además, los altos ejecutivos no usaban DSS ni MSI, por lo que se desarrollaron sistemas de información ejecutivo (ESI) o sistemas de soporte ejecutivo (ESS). <br><br>
        ESI ofrece servicios de toma de decisiones a los ejecutivos a través del suministro de información interna y externa relevante para cumplir los objetivos estratégicos de la organización. A veces se consideran como una forma específica de DSS. Los ejemplos del ESI son sistemas para facilitar el acceso a las acciones de todos los competidores, desarrollos económicos para respaldar la planificación estratégica y el análisis del desempeño del negocio. <br><br>
    </p>
    <br>
    <p id="DatosP">
        1990 a 2000: Sistemas de gestión del conocimiento <br><br>
        Durante esta era, el rápido crecimiento de las intranets, extranets, internet y otras redes globales interconectadas cambiaron drásticamente las capacidades de SI en los negocios. Se hizo posible circular el conocimiento a diferentes partes del mundo independientemente del tiempo y el espacio. <br> <br>
        Este período también vio una aparición de sistemas de planificación de recursos empresariales (ERP). ERP es una forma específica de organización de un sistema de información estratégica que incorpora todos los componentes de una organización, incluidas la fabricación, las ventas, la gestión de recursos, la planificación de recursos humanos y el marketing. <br> <br>
        Además, hubo un avance en el desarrollo y la aplicación de técnicas de inteligencia artificial (IA) a los sistemas de información comercial. Sistemas expertos (ES) y sistemas de gestión del conocimiento (KMS) interconectados entre sí. <br><br>
        Los sistemas expertos (ES) son un sistema informático que imita la capacidad de toma de decisiones de los expertos humanos. Por ejemplo, sistemas que hacen predicciones financieras, diagnostican enfermedades humanas y programan rutas para vehículos de reparto. El sistema de gestión del conocimiento (KMS) es un sistema de TI que almacena y recupera conocimiento para apoyar la creación, organización y diseminación del conocimiento empresarial dentro de la empresa. Los ejemplos de KMS son la base de datos de retroalimentación y los sistemas de mesa de ayuda. <br> <br>
        ES utiliza datos de los Sistemas de Gestión del Conocimiento para generar un resultado deseable del sistema de información, por ejemplo, un sistema de aprobación de solicitudes de préstamo. <br>
    </p>
    <br>
    <p id="DatosP">
        2000 - presente: E-Business <br><br>
        Internet y las tecnologías y aplicaciones relacionadas cambiaron la forma en que operan las empresas y las personas trabajan. Las funciones de los sistemas de información en este período siguen siendo las mismas que hace 50 años: mantenimiento de registros, gestión de informes, procesamiento de transacciones, gestión de soporte y procesos de gestión de la organización. Se usa para respaldar el proceso comercial, la toma de decisiones y las ventajas competitiva. <br><br>
        La diferencia es una mayor conectividad entre los componentes del sistema similares y diferentes. Existe una gran infraestructura de red, un mayor nivel de integración de funciones en todas las aplicaciones y potentes máquinas con mayor capacidad de almacenamiento. Muchas empresas usan tecnologías de Internet y procesos de negocio habilitados para la web para crear aplicaciones innovadoras de comercio electrónico. <br>
    </p>
    <br>
    
    <p id="DatosP">
        Bibliografia <br>Titulo; {{$bibliografia3 -> titulo}} <br> Autor; {{$bibliografia3 -> autor}} <br> Url; {{$bibliografia3 -> url}} <br> Año; {{$bibliografia3 -> año}} <br>
    </p>
    <br><br><br>
</section>
<div class="barra"></div>



<section class="about-us" id="about-us">
    <h1>
        ¿Que es Cliente/Servidor?
    </h1>
    <hr />
    <p class="title" id="DatosP">El concepto cliente-servidor es un modelo de diseño de software en el que las tareas se reparten entre los proveedores de recursos o servicios, llamados servidores, y los demandantes, llamados clientes. Un cliente realiza peticiones a otro programa, el servidor, quien le da respuesta. Esta idea también se puede aplicar a programas que se ejecutan sobre una sola computadora, aunque es más ventajosa en un sistema operativo multiusuario distribuido a través de una red de computadoras. Algunos ejemplos de aplicaciones que usen el modelo cliente-servidor son el Correo electrónico, un Servidor de impresión y la World Wide Web.</p>
    <br>
    <div>
        <img id="ClienteS" src="img/publicaciones/ClienteServidor.jpg" alt="">
    </div>
    <p id="DatosP">En esta arquitectura la capacidad de proceso está repartida entre los clientes y los servidores, aunque son más importantes las ventajas de tipo organizativo debidas a la centralización de la gestión de la información y la separación de responsabilidades, lo que facilita y clarifica el diseño del sistema.</p>
    <br>
    <p id="DatosP">La separación entre cliente y servidor es una separación de tipo lógico, donde el servidor no se ejecuta necesariamente sobre una sola máquina ni es necesariamente un solo programa. Los tipos específicos de servidores incluyen los servidores web, los servidores de archivo, los servidores del correo, etc. Mientras que sus propósitos varían de unos servicios a otros, la arquitectura básica seguirá siendo la misma.</p>
    <br>
    <p id="DatosP">La red cliente-servidor es una red de comunicaciones en la cual los clientes están conectados a un servidor, en el que se centralizan los diversos recursos y aplicaciones con que se cuenta; y que los pone a disposición de los clientes cada vez que estos son solicitados.Esto significa que todas las gestiones que se realizan se concentran en el servidor, de manera que en él se disponen los requerimientos provenientes de los clientes que tienen prioridad, los archivos que son de uso público y los que son de uso restringido, los archivos que son de sólo lectura y los que, por el contrario, pueden ser modificados, etc. Este tipo de red puede utilizarse conjuntamente en caso de que se esté utilizando en una red mixta.</p>
    <br>
    <p id="DatosP">
        Bibliografia <br>Titulo; {{$bibliografia1 -> titulo}} <br> Autor; {{$bibliografia1 -> autor}} <br> Url; {{$bibliografia1 -> url}} <br> Año; {{$bibliografia1 -> año}} <br>
    </p>
    <br><br><br>
</section>
<div class="barra"></div>



<section class="about-us" id="about-us">
    <h1>
        Los sistemas de computadoras centrales y dedicadas.
    </h1>
    <hr />
    <p class="title" id="DatosP">
        Unidad Central <br> <br>
        Una unidad central (en inglés mainframe),​ es una computadora utilizada principalmente por grandes organizaciones para aplicaciones críticas, procesamiento de datos masivos (como censos y estadísticas de la industria y del consumidor, planificación de recursos empresariales y transacciones a gran escala procesamiento). Una computadora central es más grande y tiene más potencia de procesamiento que algunas otras clases de computadoras, como miniordenadores, servidores, estaciones de trabajo y computadoras personales. La mayoría de las arquitecturas de sistemas informáticos a gran escala se establecieron en la década de 1960, pero continúan evolucionando. Las computadoras mainframe se utilizan a menudo como servidores. <br><br>
        El término deriva del gabinete grande (en inglés mainframe) que albergaba la unidad central de procesamiento y la memoria principal de las primeras computadoras.​ Más tarde, el término se utilizó para distinguir las computadoras comerciales de gama alta de las máquinas menos potentes.​    <br>
    </p>
    <br>
    <div>
        <img id="ClienteS" src="img/publicaciones/Mainframe.jpg" alt="">
    </div>
    <p class="title" id="DatosP">
    La capacidad de una unidad central se define tanto por la velocidad de su CPU como por su gran memoria interna, su alta y gran capacidad de almacenamiento externo, sus resultados en los dispositivos E/S rápidos y considerables, la alta calidad de su ingeniería interna que tiene como consecuencia una alta fiabilidad y soporte técnico costoso, pero de alta calidad. Una unidad central puede funcionar durante años sin problemas ni interrupciones y las reparaciones de la misma pueden ser realizadas mientras está funcionando. Los vendedores de unidades centrales ofrecen servicios especiales; por ejemplo, si se rompe el equipo, el vendedor ejecutará las aplicaciones de su cliente en sus propias unidades sin que los usuarios lo noten mientras que duran las reparaciones. La independencia interna de estas unidad es tan grande que, por lo menos, en un caso conocido, los técnicos pudieron cambiar las unidades centrales de sitio desmontándolas pieza a pieza y montándolas en otro lugar, dejando, mientras tanto, dichos equipos funcionando; en este ejemplo, el cambio de las unidades centrales de un sitio a otro se produjo de manera transparente.
    </p>
    <br>
    <p class="title" id="DatosP">
        Unidad dedicada <br> <br>
        Un servidor dedicado es un equipo informático físico que destina todos sus recursos a proporcionar información y atender las peticiones de otro ordenador (cliente) que ha contratado sus servicios. Por tanto, a diferencia de un servidor compartido, el dedicado trabaja en exclusiva para un solo cliente. Existe un amplio abanico de servidores dedicados entre los que poder elegir para el alojamiento en Internet. <br> <br>
        Por analogía, podríamos decir que un servidor dedicado es a un ordenador lo que un chalet en la montaña a su propietario. Este último disfruta de una vivienda sin vecinos a su alrededor, de igual manera que una computadora que tenga un servidor dedicado contratado goza, en soledad, de todos los medios de éste (memoria RAM, CPU, sistema operativo, disco duro, etcétera).
    </p>
    <br>
    <div>
        <img id="ClienteSE" src="img/publicaciones/SDedicado.png" alt="">
    </div>
    
    <p id="DatosP">
        Bibliografia <br>Titulo; {{$bibliografia4 -> titulo}} <br> Autor; {{$bibliografia4 -> autor}} <br> Url; {{$bibliografia4 -> url}} <br> Año; {{$bibliografia4 -> año}} <br>
    </p>
    <br><br><br>
</section>
<div class="barra"></div>



<section class="about-us" id="about-us">
    <h1>
         Sistemas de conexión libre y a través de redes
    </h1>
    <hr />
    <p class="title" id="DatosP">
        Conexión libre <br><br>
        Hace más de 10 años que las computadoras escritorio aparecieron de manera masiva. Esto permitió que parte apreciable de la carga de trabajo de cómputo tanto en el ámbito de cálculo como en el ámbito de la presentación se lleven a cabo desde el escritorio del usuario. En muchos de los casos el usuario obtiene la información que necesita de alguna computadora de servicio. Estas computadoras de escritorio se conectan a las computadoras de servicio empleando software que permite la emulación de algún tipo de terminal. En otros de los casos se les transfiere la información haciendo uso de recursos magnéticos o por trascripción. <br><br>

        Cómputo a través de redes <br> <br>
        Esta es la era que esta basada en el concepto de redes de computadoras, en la que la información reside en una o varias computadoras, los usuarios de esta información hacen uso de computadoras para laborar y todas ellas se encuentran conectadas entre si. Esto brinda la posibilidad de que todos los usuarios puedan acceder a la información de todas las computadoras y a la vez que los diversos sistemas intercambien información. <br><br>
    </p>
    <br>
    <div>
        <img id="ClienteSE" src="img/publicaciones/Redes.png" alt="">
    </div>
    <br>
    <p id="DatosP">
        Bibliografia <br>Titulo; {{$bibliografia5 -> titulo}} <br> Autor; {{$bibliografia5 -> autor}} <br> Url; {{$bibliografia5 -> url}} <br> Año; {{$bibliografia5 -> año}} <br>
    </p>
    <br><br><br>
</section>
<div class="barra"></div>



<section class="about-us" id="about-us">
    <h1>
        Los sistemas con arquitectura Cliente/Servidor 
    </h1>
    <hr />
    <p class="title" id="DatosP">
        Arquitectura cliente-servidor <br><br>
        En esta arquitectura la computadora de cada uno de los usuarios, llamada cliente, produce una demanda de información a cualquiera de las computadoras que proporcionan información, conocidas como servidores estos últimos responden a la demanda del cliente que la produjo. <br><br>
        Los clientes y los servidores pueden estar conectados a una red local o una red amplia, como la que se puede implementar en una empresa o a una red mundial como lo es la Internet. <br><br>
        Bajo este modelo cada usuario tiene la libertad de obtener la información que requiera en un momento dado proveniente de una o varias fuentes locales o distantes y de procesarla como según le convenga. Los distintos servidores también pueden intercambiar información dentro de esta arquitectura. 
    </p>
    <br>
    <div>
        <img id="ClienteSE" src="img/publicaciones/Arquitectura.jpg" alt="">
    </div>
    <p class="title" id="DatosP">
        Partes que componen el sistema <br><br>
        Cliente: Programa ejecutable que participa activamente en el establecimiento de las conexiones. Envía una petición al servidor y se queda esperando por una respuesta. Su tiempo de vida es finito una vez que son servidas sus solicitudes, termina el trabajo. <br><br>
        Servidor: Es un programa que ofrece un servicio que se puede obtener en una red. Acepta la petición desde la red, realiza el servicio y devuelve el resultado al solicitante. Al ser posible implantarlo como aplicaciones de programas, puede ejecutarse en cualquier sistema donde exista TCP/IP y junto con otros programas de aplicación. El servidor comienza su ejecución antes de comenzar la interacción con el cliente. Su tiempo de vida o de interacción es “interminable”. <br><br>
        Los servidores pueden ejecutar tareas sencillas (caso del servidor hora día que devuelve una respuesta) o complejas (caso del servidor ftp en el cual se deben realizar operaciones antes de devolver una respuesta). Los servidores sencillos procesan una petición a la vez (son secuenciales o interactivos), por lo que no revisan si ha llegado otra petición antes de enviar la respuesta de la anterior. <br><br>
        Los más complejos trabajan con peticiones concurrentes aún cuando una sola petición lleve mucho tiempo para ser servida (caso del servidor ftp que debe copiar un archivo en otra máquina). Son complejos pues tienen altos requerimientos de protección y autorización. Pueden leer archivos del sistema, mantenerse en línea y acceder a datos protegidos y a archivos de usuarios. No puede cumplir a ciegas las peticiones de los clientes, deben reforzar el acceso al sistema y las políticas de protección. Los servidores por lo general tienen dos partes: <br><br>
        1° Programa o proceso que es responsable de aceptar nuevas peticiones: Maestro o Padre. <br>
        2° Programas o procesos que deben manejar las peticiones individuales: Esclavos o Hijos. <br><br>
    </p>
    <br>
    <p class="title" id="DatosP">
        Características de la arquitectura Cliente-Servidor <br><br> 
        Combinación de un cliente que interactúa con el usuario, y un servidor que interactúa con los recursos a compartir. El proceso del cliente proporciona la interfaz entre el usuario y el resto del sistema. El proceso del servidor actúa como un motor de software que maneja recursos compartidos tales como bases de datos, impresoras, Módem, etc. <br>
        Las tareas del cliente y del servidor tienen diferentes requerimientos en cuanto a recursos de cómputo como velocidad del procesador, memoria, velocidad y capacidades del disco e input-output devices. <br>
        Se establece una relación entre procesos distintos, los cuales pueden ser ejecutados en la misma máquina o en máquinas diferentes distribuidas a lo largo de la red. <br>
        Existe una clara distinción de funciones basadas en el concepto de”servicio”, que se establece entre clientes y servidores. <br>
        La relación establecida puede ser de muchos a uno, en la que un servidor puede dar servicio a muchos clientes, regulando su acceso a los recursos compartidos. <br>
        Los clientes corresponden a procesos activos en cuanto a que son estos los que hacen peticiones de servicios. Estos últimos tienen un carácter pasivo, ya que esperan peticiones de los clientes. <br>
        No existe otra relación entre clientes y servidores que no sea la que se establece a través del intercambio de mensajes entre ambos. El mensaje es el mecanismo para la petición y entrega de solicitudes de servicios. <br>
        El ambiente es heterogéneo. La plataforma de hardware y el sistema operativo del cliente y del servidor no son siempre los mismos. Precisamente una de las principales ventajas de esta arquitectura es la posibilidad de conectar clientes y servidores independientemente de sus plataformas. <br>
        El concepto de escalabilidad tanto horizontal como vertical es aplicable a cualquier sistema Cliente-Servidor. La escalabilidad horizontal permite agregar más estaciones de trabajo activas sin afectar significativamente el rendimiento. La escalabilidad vertical permite mejorar las características del servidor o agregar múltiples servidores. <br>
    </p>
    <br>
    <p class="title" id="DatosP">
        
    </p>
    <br>
    <p class="title" id="DatosP">
        
    </p>
    <br>
    <p id="DatosP">
        Bibliografia <br>Titulo; {{$bibliografia6 -> titulo}} <br> Autor; {{$bibliografia6 -> autor}} <br> Url; {{$bibliografia6 -> url}} <br> Año; {{$bibliografia6 -> año}} <br>
    </p>
    <br><br><br>
</section>
<div class="barra"></div>



<section class="about-us" id="about-us">
    <h1>
        Protocolos de comunicación en red.
    </h1>
    <hr />
    <p class="title" id="DatosP">
        La interconexión de sistemas o redes de computadoras son la base de las comunicaciones hoy en día y están diseñadas bajo múltiples protocolos de comunicación. Por ejemplo, existen muchos protocolos al establecer una conexión a internet y según el tipo que se necesite establecer, dichos protocolos van a variar. Además, la comunicación a internet no es el único tipo de comunicación cuando hablamos de transmisión de datos e intercambio de mensajes en redes. En todos los casos, los protocolos de red definen las características de la conexión. <br> <br>
        Un protocolo es un conjunto de reglas: los protocolos de red son estándares y políticas formales, conformados por restricciones, procedimientos y formatos que definen el intercambio de paquetes de información para lograr la comunicación entre dos servidores o más dispositivos a través de una red. <br> <br>
        Los protocolos de red incluyen mecanismos para que los dispositivos se identifiquen y establezcan conexiones entre sí, así como reglas de formato que especifican cómo se forman los paquetes y los datos en los mensajes enviados y recibidos. Algunos protocolos admiten el reconocimiento de mensajes y la compresión de datos diseñados para una comunicación de red confiable de alto rendimiento. <br> <br>
    </p>
    <br>
    <div>
        <img id="ClienteSEP" src="img/publicaciones/Protocolos.png" alt="">
    </div>
    <br>
    <p class="title" id="DatosP">
        Tipos de protocolos de red <br><br>
        Los protocolos para la transmisión de datos en internet más importantes son TCP (Protocolo de Control de Transmisión) e IP (Protocolo de Internet). De manera conjunta (TCP/IP) podemos enlazar los dispositivos que acceden a la red, algunos otros protocolos de comunicación asociados a internet son POP, SMTP y HTTP. <br> <br>
        Estos los utilizamos prácticamente todos los días, aunque la mayoría de los usuarios no lo sepan ni conozcan su funcionamiento. Estos protocolos permiten la transmisión de datos desde nuestros dispositivos para navegar a través de los sitios, enviar correos electrónicos, escuchar música online, etc. <br><br>
        Existen varios tipos de protocolos de red: <br><br>
        <ul style= "list-style-type: square;">
                <li>Protocolos de comunicación de red: protocolos de comunicación de paquetes básicos como TCP / IP y HTTP.</li>
                <li>Protocolos de seguridad de red: implementan la seguridad en las comunicaciones de red entre servidores, incluye HTTPS, SSL y SFTP.</li>
                <li>Protocolos de gestión de red: proporcionan mantenimiento y gobierno de red, incluyen SNMP e ICMP.</li>
        </ul><br>
        A continuación listamos algunos de los protocolos de red más conocidos, según las capas del modelo OSI:
    </p>
    <p class="title" id="DatosP">Protocolos de la capa 1 - Capa física <br>
         <ul style= "list-style-type: square;">
            <li>USB: Universal Serial Bus</li>
            <li>Ethernet: Ethernet physical layer</li>
            <li>DSL: Digital subscriber line</li>
            <li>Etherloop: Combinación de Ethernet and DSL</li>
            <li>Infrared: Infrared radiation</li>
            <li>Frame Relay</li>
            <li>SDH: Jerarquía digital síncrona</li>
            <li>SONET: Red óptica sincronizada</li>
        </ul><br>
        Protocolos de la capa 2 - Enlace de datos <br><br>
        <ul style= "list-style-type: square;">
            <li>DCAP: Protocolo de acceso del cliente de la conmutación de la transmisión de datos</li>
            <li>FDDI: Interfaz de distribución de datos en fibra</li>
            <li>HDLC: Control de enlace de datos de alto nivel</li>
            <li>LAPD: Protocolo de acceso de enlace para los canales</li>
            <li>PPP: Protocolo punto a punto</li>
            <li>STP (Spanning Tree Protocol): protocolo del árbol esparcido</li>
            <li>VTP VLAN: trunking virtual protocol para LAN virtual</li>
            <li>MPLS: Conmutación multiprotocolo de la etiqueta</li>
        </ul><br>
        Protocolos de la capa 3 - Red <br><br>
        <ul style= "list-style-type: square;">
            <li>ARP: Protocolo de resolución de direcciones</li>
            <li>BGP: Protocolo de frontera de entrada</li>
            <li>ICMP: Protocolo de mensaje de control de Internet</li>
            <li>IPv4: Protocolo de internet versión 4</li>
            <li>IPv6: Protocolo de internet versión 6</li>
            <li>IPX: Red interna del intercambio del paquete</li>
            <li>OSPF: Abrir la trayectoria más corta primero</li>
            <li>RARP: Protocolo de resolución de direcciones inverso</li>
        </ul><br>
        Protocolos de la capa 4 - Transporte <br><br>
        <ul style= "list-style-type: square;">
            <li>IL: Convertido originalmente como capa de transporte para 9P</li>
            <li>SPX: Intercambio ordenado del paquete</li>
            <li>SCTP: Protocolo de la transmisión del control de la corriente</li>
            <li>TCP: Protocolo del control de la transmisión</li>
            <li>UDP: Protocolo de datagramas de usuario</li>
            <li>iSCSI: Interfaz de sistema de computadora pequeña de Internet iSCSI</li>
            <li>DCCP: Protocolo de control de congestión de datagramas</li>
        </ul><br>
        Protocolos de la capa 5 - Sesión <br><br>
        <ul style= "list-style-type: square;">
            <li>NFS: Red de sistema de archivos</li>
            <li>SMB: Bloque del mensaje del servidor</li>
            <li>RPC: Llamada a procedimiento remoto</li>
            <li>SDP: Protocolo directo de sockets</li>
            <li>SMB: Bloque de mensajes del servidor</li>
            <li>SMPP: Mensaje corto punto a punto</li>
        </ul><br>
        Protocolos de la capa 6- Presentación <br><br>
        <ul style= "list-style-type: square;">
            <li>TLS: Seguridad de la capa de transporte</li>
            <li>SSL: Capa de conexión segura</li>
            <li>XDR: Extenal data representation</li>
            <li>MIME: Multipurpose Internet Mail Extensions</li>
        </ul><br>
        Protocolos de la capa 7 - Aplicación <br><br>
        <ul style= "list-style-type: square;">
            <li>DHCP: Protocolo de configuración dinámica de host</li>
            <li>DNS: Domain Name System</li>
            <li>HTTP: Protocolo de transferencia de hipertexto</li>
            <li>HTTPS: Protocolo de transferencia de hipertexto seguro</li>
            <li>POP3: Protocolo de oficina de correo</li>
            <li>SMTP: protocolo de transferencia simple de correo</li>
            <li>Telnet: Protocolo de telecomunicaciones de red</li>
        </ul><br>
    </p>
    <br>
    <p class="title" id="DatosP">
        
    </p>
    <br>
    
    <p id="DatosP">
        Bibliografia <br>Titulo; {{$bibliografia7 -> titulo}} <br> Autor; {{$bibliografia7 -> autor}} <br> Url; {{$bibliografia7 -> url}} <br> Año; {{$bibliografia7 -> año}} <br>
    </p>
    <br><br><br>
</section>
<div class="barra"></div>



<section class="about-us" id="about-us">
    <h1>
         Clasificar los sistemas de información de acuerdo a su arquitectura. 
    </h1>
    <hr />
    <p class="title" id="DatosP">
        <ol>
            <li>Los sistemas de dos niveles: archivo — servidor. Las funciones de servidor en este caso se limitan habitualmente por el almacenamiento de datos (es posible también el almacenamiento de archivos ejecutados), y el procesamiento de datos tiene lugar solamente de parte de cliente. El número de clientes está limitado a causa de imposibilidad de acceso simultáneo para grabar un archivo. Las fallas principales de tal sistema son: la ausencia de integridad garantizada de la base de datos, el bajo nivel de protección, la baja productividad del sistema.</li> <br><br>
            <li>Los sistemas de dos niveles: cliente — servidor, donde todos los cálculos se realizan en el servidor con los medios del Sistema de Gestión de Bases de Datos bajo la protección del sistema operativo del servidor. Las fallas principales de tal tipo son la velocidad insuficiente de funcionamiento y la incapacidad de realizar los algoritmos complejos de cálculo. Aquí también es necesario señalar númerosas decisiones donde el sistema en la realidad funciona como archivo — servidor a pesar de uso de los medios instrumentales cliente — servidor con todas las consecuencias negativas derivadas. Tal decisión se crea por lo habitual a causa de dificultad de realizar los algoritmos complejos de cálculo con los medios del Sistema de Gestión de Bases de Datos de servidor y de transferir los cálculos al puesto de trabajo del cliente.</li><br><br>
            <li>Los sistemas de muchos niveles, donde las funciones de procesamiento de datos son pasados a uno o varios servidores especiales, lo que permite dividir las funciones de almacenamiento, de procesamiento y de presentación de datos para el uso más efectivo. En dicha etapa las realizaciones de tal clase son más convenientes para la realización de funcionalidad requerida.</li> <br><br>
        </ol>
    </p>
    <br>
    <div>
        
    </div>
    
    <p id="DatosP">
        Bibliografia <br>Titulo; {{$bibliografia8 -> titulo}} <br> Autor; {{$bibliografia8 -> autor}} <br> Url; {{$bibliografia8 -> url}} <br> Año; {{$bibliografia8 -> año}} <br>
    </p>
    <br><br><br>
</section>
<div class="barra"></div>
@endsection