

.MODEL SMALL
.STACK 100H

.DATA
MSG:    DB "Before Reverse", 0Dh, 0Ah, 24h 

MSG02:  DB "After Reverse", 0Dh, 0Ah, 24h 


.CODE MAIN
    
    MAIN PROC
        
        MOV AX, @DATA   
        MOV DS, AX
        
        
        MOV AH, 09H
        LEA DX, MSG
        INT 21H      
        
        MOV CX, 0
        
        MOV AH, 01H
        
        
            
            WHILE:
            
            INT 21H
            MOV DL, AL
            
            CMP DL, 0DH
            
            JE END_W
            
            JMP INSERT_TO_STACK
                
                    
                    INSERT_TO_STACK:
                
                    PUSH DX
                    INC  CX
                    JMP WHILE
                                  
                
            END_W:
            
            MOV AH, 02H
            
            MOV DL, 0DH
            INT 21H
            
            MOV DL, 0AH
            INT 21H
            
            MOV AH, 09H
            LEA DX, MSG02
            INT 21H
            
            MOV AH, 02H      

            
            PRINT:
            POP  DX
            INT  21H
            LOOP PRINT
        
        
        

        
         
    MAIN ENDP
    

END MAIN
 
 