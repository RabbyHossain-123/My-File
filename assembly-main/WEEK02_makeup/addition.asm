;perform add operation maintaining the structure


.MODEL SMALL
.STACK 50H

.DATA
 
X    DW 34H   
Y    DW 56H
 


.CODE MAIN

    
    MAIN PROC
        
        MOV AX,@DATA
        MOV DS,AX
        
        MOV AX, X   

        MOV BX, Y 
        
        
        ADD AX, BX 
        
         
    
    MAIN ENDP
        
        

END MAIN