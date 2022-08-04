;without using nested if to check  if AX<BX or BX<CX then put 0 in AX else put 0  in BX;



.MODEL SMALL
.STACK 100H

.DATA 
.


.CODE MAIN
    
    MAIN PROC
        
        
        MOV AX, 5
        MOV BX, 7
        MOV CX, 4
        
        
        
        IF:         ;if        

        CMP AX, BX          
        JL DISPLAY
        
        CMP BX, CX  
        JL DISPLAY
        
        JMP ELSE
        
        
            DISPLAY:    ;then
            
            MOV DX, 0
            JMP END_IF        
        
        
        ELSE:       ;else
         
        MOV DX, 1
        ;JMP END_IF
        
        
        
        END_IF:     ;end_if
                
        
       
        
         
    MAIN ENDP
    

END MAIN
 
 