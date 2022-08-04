

.MODEL SMALL
.STACK 100H

.DATA
;MSG:    DB "Before Reverse", 0Dh, 0Ah, 24h 

;MSG02:  DB "After Reverse", 0Dh, 0Ah, 24h 


.CODE MAIN
    
    MAIN PROC
        
        ;MOV AX, @DATA   
        ;MOV DS, AX
        
        
        ;MOV AH, 09H
        ;LEA DX, MSG
        ;INT 21H
        
        
        MOV AX, 00H                 ;clearing AX      
        
        MOV AL, 123D
        MOV BL, 10D
        
        
            
            WHILE:                  ;condition checking
            
            
            CMP AL, 00D
            JE  END_W
            
            DIV BL
            MOV BH, AL      ;keep the record of AL value, which might lost due to int21h 
            
            MOV DL, AH      ;;keep the record of AH value, which might lost due to print operation
            
            ADD DL, 30H     ;convert to numeric ascii value
            
                        
            JMP PRINT
                
            
                        PRINT:
                        
                        MOV AH, 02H
                        INT  21H
                        
                        MOV AH, 00H     ;clearing AH
                        MOV AL, BH      ;putting the values to Al that we kept a record
                        
                        JMP WHILE
        
                                  
                
            END_W:                    
            
            
        
        
        

        
         
    MAIN ENDP
    

END MAIN
 
 