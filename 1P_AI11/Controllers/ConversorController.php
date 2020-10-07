<?php 


class ConversorController{

public $op1;
public $op2;
public $entrada;
public $resultado;
public $unidad;



function __construct(){
    $this->entrada = 0;
    $this->op1 = 0;
    $this->op2 = 0;
    $this->unidad= "";
    $this->resultado = 0;
    

}

function parametros(){

    if(isset($_POST["entrada"])){
        $this->entrada = $_POST["entrada"];
    }

    if(isset($_POST["unidades1"])){
        $this->op1 = $_POST["unidades1"];
    }

    if(isset($_POST["unidades2"])){
        $this->op2 = $_POST["unidades2"];
    }

    if(isset($_POST["resultado"])){
        $this->resultado = $_POST["resultado"];
    }
}


public function operaciones(){
    //peso
    if ($this->op1==1 && $this->op2==1 ) {
        $this->resultado=$this->entrada;
    $this->unidad="kg";
    }
   if ($this->op1==1 && $this->op2==2 ) {
       $this->kg_gr();
   }
   if ($this->op1==1 && $this->op2==3 ) {
    $this->kg_oz();
    }
    if ($this->op1==2 && $this->op2==1 ) {
    $this->gr_kg();
    }
    if ($this->op1==2 && $this->op2==2 ) {
    $this->resultado=$this->entrada;
    $this->unidad="gr";
    }
    if ($this->op1==2 && $this->op2==3 ) {
    $this->gr_oz();
    }
    if ($this->op1==3 && $this->op2==1 ) {
    $this->oz_kg();
    }
    if ($this->op1==3 && $this->op2==2 ) {
    $this->oz_gr();
    }
    if ($this->op1==3 && $this->op2==3 ) {
    $this->resultado=$this->entrada;
    $this->unidad="oz";
    }
    //distancia
    if ($this->op1==4 && $this->op2==4 ) {
    $this->resultado=$this->entrada;
    $this->unidad="cm";
    }
    if ($this->op1==4 && $this->op2==5 ) {
   $this->cm_m();
}
if ($this->op1==4 && $this->op2==6 ) {
$this->cm_in();
}
if ($this->op1==4 && $this->op2==7 ) {
$this->cm_yd();
}
if ($this->op1==5 && $this->op2==4 ) {
    $this->m_cm();
}
if ($this->op1==5 && $this->op2==5 ) {
    $this->resultado=$this->entrada;
    $this->unidad="m";
}
if ($this->op1==5 && $this->op2==6 ) {
$this->m_in();
}
if ($this->op1==5 && $this->op2==7 ) {
$this->m_yd();
}
if ($this->op1==6 && $this->op2==4 ) {
    $this->in_cm();
}
if ($this->op1==6 && $this->op2==5 ) {
    $this->in_m();
}
if ($this->op1==6 && $this->op2==6 ) {
    $this->resultado=$this->entrada;
    $this->unidad="in";
}
if ($this->op1==6 && $this->op2==7 ) {
$this->in_yd();
}

if ($this->op1==7 && $this->op2==4 ) {
    $this->yd_cm();
}
if ($this->op1==7 && $this->op2==5 ) {
    $this->yd_m();
}
if ($this->op1==7 && $this->op2==6 ) {
    $this->yd_in();
}
if ($this->op1==7 && $this->op2==7 ) {
    $this->resultado=$this->entrada;
    $this->unidad="yd";
}
//Volumen liquido
if ($this->op1==8 && $this->op2==8 ) {
    $this->resultado=$this->entrada;
    $this->unidad="lt";
}
if ($this->op1==8 && $this->op2==9 ) {
    $this->lt_ml();
}
if ($this->op1==8 && $this->op2==10 ) {
    $this->lt_m3();
}

if ($this->op1==9 && $this->op2==8 ) {
    $this->ml_lt();
}
if ($this->op1==9 && $this->op2==9 ) {
    $this->resultado=$this->entrada;
    $this->unidad="ml";
}
if ($this->op1==9 && $this->op2==10 ) {
    $this->ml_m3();
}

if ($this->op1==10 && $this->op2==8 ) {
    $this->m3_lt();
}
if ($this->op1==10 && $this->op2==9 ) {
    $this->m3_ml();
}
if ($this->op1==10 && $this->op2==10 ) {
    $this->resultado=$this->entrada;
    $this->unidad="m3";
}



if ($this->op1>=1 && $this->op1<=3 && $this->op2>3  && $this->op2<=10 ) {
    
    echo ('<script type="text/javascript">
    alert("No se pueden convertir estas unidades");
    window.location.href="conversor.php";
    </script>');
}

if ($this->op1>=4 && $this->op1<=7 && $this->op2>=1  && $this->op2<=3 ) {
    
    echo ('<script type="text/javascript">
    alert("No se pueden convertir estas unidades");
    window.location.href="conversor.php";
    </script>');
}
if ($this->op1>=4 && $this->op1<=7 && $this->op2>7  && $this->op2<=10 ) {
    
    echo ('<script type="text/javascript">
    alert("No se pueden convertir estas unidades");
    window.location.href="conversor.php";
    </script>');
}
if ($this->op1>=8 && $this->op1<=10 && $this->op2>=1  && $this->op2<8 ) {
    
    echo ('<script type="text/javascript">
    alert("No se pueden convertir estas unidades");
    window.location.href="conversor.php";
    </script>');
}

}

//peso
    private function error(){
        $this->unidad="no se puede convertir";
    }
    private function kg_gr(){

    $this->resultado=($this->entrada*1000);
    $this->unidad="gr";
   }
   
   private function kg_oz(){

    $this->resultado=($this->entrada*35.274);
    $this->unidad="oz";
   }
   private function gr_kg(){

    $this->resultado=($this->entrada/1000);
    $this->unidad="kg";
   }
   private function gr_oz(){

    $this->resultado=($this->entrada*0.035274);
    $this->unidad="oz";
   }
   private function oz_kg(){

    $this->resultado=($this->entrada*0.0283495);
    $this->unidad="kg";
   }
   private function oz_gr(){

    $this->resultado=($this->entrada*28.3495);
    $this->unidad="gr";
   }


   //distancia
   private function cm_m(){

    $this->resultado=($this->entrada*0.01);
    $this->unidad="m";
   }
   
   private function cm_in(){

    $this->resultado=($this->entrada*0.3937);
    $this->unidad="in";
   }
   private function cm_yd(){

    $this->resultado=($this->entrada*0.0109361);
    $this->unidad="yd";
   }
   private function m_cm(){

    $this->resultado=($this->entrada*100);
    $this->unidad="cm";
   }
   private function m_in(){

    $this->resultado=($this->entrada*39.3701);
    $this->unidad="in";
   }
   private function m_yd(){

    $this->resultado=($this->entrada*1.09361);
    $this->unidad="yd";
   }

   private function in_cm(){

    $this->resultado=($this->entrada*2.54);
    $this->unidad="cm";
   }
   private function in_m(){

    $this->resultado=($this->entrada*0.0254);
    $this->unidad="m";
   }
   private function in_yd(){

    $this->resultado=($this->entrada*0.027778);
    $this->unidad="yd";
   }
   private function yd_cm(){

    $this->resultado=($this->entrada*91.44);
    $this->unidad="cm";
   }
   private function yd_m(){

    $this->resultado=($this->entrada*0.9144);
    $this->unidad="m";
   }
   private function yd_in(){

    $this->resultado=($this->entrada*36);
    $this->unidad="in";
   }

//volumen liquido

private function lt_ml(){

    $this->resultado=($this->entrada*1000);
    $this->unidad="ml";
   }
   private function lt_m3(){

    $this->resultado=($this->entrada*0.001);
    $this->unidad="m3";
   }
   private function ml_lt(){

    $this->resultado=($this->entrada*0.001);
    $this->unidad="lt";
   }
   private function ml_m3(){

    $this->resultado=($this->entrada/1000000);
    $this->unidad="m3";
   }
   private function m3_lt(){

    $this->resultado=($this->entrada*1000);
    $this->unidad="lt";
   }
   private function m3_ml(){

    $this->resultado=($this->entrada*1000000);
    $this->unidad="ml";
   }


}

?>