 
 
 class Personaje{
                /*Dotamos al personaje de unaserie de propiedades iniciales */
                constructor(x,y,z,direccion,direccionisometrica,color,tiemponacimiento,estadoanim,energia){
                    this.tiemponacimiento = 0;
                    this.x= Math.random()*(terrenox2-terrenox1)+terrenox1;
                    this.y= Math.random()*(terrenoy2-terrenoy1)+terrenoy1;
                    this.direccion = Math.PI*2*Math.random();
                    this.direccionverdadera = Math.PI*2*Math.random();
                    this.direccionisometrica = Math.floor(Math.random()*4)
                    this.color = Math.floor(Math.random()*3);
                    this.estadoanim = Math.floor(Math.random()*8);
                    this.energia = 100;
                }
                
                
                /*Creamos un metodo para gestionar el movimieno del personaje*/
                 mueve(){
                     
                    this.tiemponacimiento += 1;
                     
                     /*
                     if(this.tiemponacimiento % 100 == 0){
                    this.cambiadireccion();
                     }*/
                     
                    this.x -= Math.cos(this.direccion);
                    this.y -= Math.sin(this.direccion);
        
                     if(this.direccionisometrica == 0){
                          this.direccion = 0;
                     }else if(this.direccionisometrica == 1){
                          this.direccion = Math.PI/2;
                     }else if(this.direccionisometrica == 2){
                              this.direccion = Math.PI;
                         }else if(this.direccionisometrica == 3){
                          this.direccion = Math.PI*1.5;
                     }
                     
                     this.estadoanim++;
                     if(this.estadoanim > 8){this.estadoanim=0;}
                   
                    if(this.tiemponacimiento % 100 == 0){this.pierdeenergia();}
                     
                     this.colisiona();
                }
     
     
     
                persigue(){
                    this.estadoanim++;
                     if(this.estadoanim > 8){this.estadoanim=0;}
                   
                    this.x -= (this.x - posx)/100
                    this.y -= (this.y - posy)/100
                       
                    this.x -= Math.cos(this.direccion);
                    this.y -= Math.sin(this.direccion);
                    this.colisiona()
                }
     
                cambiadireccion(){
                    if(this.tiemponacimiento % 100 == 0){this.direccionisometrica =
                     Math.floor(Math.random()*4); }
                }
                
     
                colisiona(){
                    /*
                    if(
                        this.x > terrenox2 
                        ||
                        this.x < terrenox1
                        ||
                        this.y > terrenoy2
                        || 
                        this.y < terrenoy1
                    ){

                    }  
                    */
                   var colisionapixel = contextomapa.getImageData(this.x/90+1,this.y/90+1,1,1);
                    var alpha = colisionapixel.data[3];
                    var componente = colisionapixel.data[0];
                    if(alpha == 0){
                         if(this.direccionisometrica == 1){this.direccionisometrica = 3;}
                         else if(this.direccionisometrica == 3){this.direccionisometrica = 1;}
                        else if(this.direccionisometrica == 0){this.direccionisometrica = 2;}
                        else if(this.direccionisometrica == 2){this.direccionisometrica = 0;}
                        
                    }
                    this.z = componente;
                    
                }
   
            pierdeenergia(){
               this.energia -=1; 
            }
          
 }