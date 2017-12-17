<!-- Hide

//ȥ���ַ���ǰ�����˿ո�
function trim(inputString) {
   // Removes leading and trailing spaces from the passed string. Also removes
   // consecutive spaces and replaces it with one space. If something besides
   // a string is passed in (null, custom object, etc.) then return the input.
   if (typeof inputString != "string") { return inputString; }
   var retValue = inputString;
   var ch = retValue.substring(0, 1);
   while (ch == " ") { // Check for spaces at the beginning of the string
      retValue = retValue.substring(1, retValue.length);
      ch = retValue.substring(0, 1);
   }
   ch = retValue.substring(retValue.length-1, retValue.length);
   while (ch == " ") { // Check for spaces at the end of the string
      retValue = retValue.substring(0, retValue.length-1);
      ch = retValue.substring(retValue.length-1, retValue.length);
   }
 
   return retValue; // Return the trimmed string back to the user
} // Ends the "trim" function

//�жϷǷ��ַ�����/˫���ţ������ڷ�����
function invalidchar(inputString) {
	//check single quotation marks in the string
	if (inputString.indexOf('\'')>=0) return true;

	//check double quotation marks in the string
	if (inputString.indexOf('"')>=0) return true;

	return false; 
} // Ends the "invalidchar" function


//�ж��Ƿ�ȫ���ǿ��ַ�
function isAllBlank(str)
{
   var ch;
   for(j=0;j<str.length;j++)
   {
	   ch=str.charAt(j);
	   if(ch!=' ')
	   return false; 
   }
   return true;
}


//���������ַ���ת��������
function strToNumber(str)
{
   var ch;
   var number=0;
   var factor=1;
   var digit;
      
   for(j=str.length-1;j>=0;j--)   
   {
	   ch=str.charAt(j);   
	   if(ch=='.')
	   {
		   number/=Math.pow(10,str.length-j-1);
		   factor=1;
		   continue;   
	   }
	   number+=((ch-'0')*factor);   
	   factor*=10;   
   }   
   return number;
}

//�ж��ַ����Ƿ�Ϊ����
function isUpNumber(str)
{
		var flag; 
		flag = '0';
		for(j=0;j<str.length;j++)
		{
			ch=str.charAt(j);   
			//alert("ch===" + ch);
			if(ch=='.')
			{
				//alert("ch����...." );
				//alert("jjjjjjjjjjjj=" + j);
				//alert("ddddddd=" + str.length);
				if(j < (str.length-1) )
				{
					//alert("���һλ����..." );
					if (flag=='0')
					{
						flag = '1';
						continue;
					}
					else
					{
						//alert("������.....");
						return false;
					}
				}
				else
				{
					//alert("���һλ��..." );
					return false;
				}
			}
			if(ch<'0'||ch>'9')	return false; 
		}

		return true;
}

// -->