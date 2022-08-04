;using nested if to check  if AX<BX and BX<CX then put 0 in AX else put 0  in BX;



.MODEL SMALL
.STACK 100H

.DATA 
.


.CODE MAIN
    
    MAIN PROC
        
        
        MOV AX, 5
        MOV BX, 7
        MOV CX, 4
        
        
        
        IF:        

        CMP AX, BX          
        JNL ELSE
        JMP NESTED_IF
        
        NESTED_IF:
        
        CMP BX, CX  
        JNL NESTED_ELSE
        JMP DISPLAY
        
        NESTED_ELSE:
        
        JMP ELSE

        
        DISPLAY:
        
        MOV AX, 0
        JMP END_IF
        
        ELSE:
         
        MOV BX, 0
        JMP END_IF
        

        
        END_IF:
                
        
       
        
         
    MAIN ENDP
    

END MAIN
 
 