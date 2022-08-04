

.MODEL SMALL
.STACK 100H

.DATA 


.CODE MAIN
    
    MAIN PROC
        
        MOV AX, 5H
        MOV DX, 6H
        
        PUSH AX
        PUSH DX
        
        POP AX
        POP DX
        
        

        
         
    MAIN ENDP
    

END MAIN
 
 