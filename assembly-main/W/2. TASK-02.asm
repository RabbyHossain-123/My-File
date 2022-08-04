

.MODEL SMALL
.STACK 100H

.DATA 


.CODE MAIN
    
    MAIN PROC
        
        MOV AX, 1234H
        MOV BX, 5678H
        MOV CX, 9ABCH
        MOV SP, 0100H    
        
        PUSH AX
        
        PUSH BX
        
        XCHG AX,CX 
        
        POP CX
        
        PUSH AX
        
        POP BX 
        
        

        
         
    MAIN ENDP
    

END MAIN
 
 