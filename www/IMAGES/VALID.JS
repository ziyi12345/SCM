<!-- Hide

//去掉字符串前后两端空格
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

//判断非法字符（单/双引号），存在返回真
function invalidchar(inputString) {
	//check single quotation marks in the string
	if (inputString.indexOf('\'')>=0) return true;

	//check double quotation marks in the string
	if (inputString.indexOf('"')>=0) return true;

	return false; 
} // Ends the "invalidchar" function


//判断是否全部是空字符
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


//将数字型字符串转换成数字
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

//判断字符串是否为正数
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
				//alert("ch等于...." );
				//alert("jjjjjjjjjjjj=" + j);
				//alert("ddddddd=" + str.length);
				if(j < (str.length-1) )
				{
					//alert("最后一位不是..." );
					if (flag=='0')
					{
						flag = '1';
						continue;
					}
					else
					{
						//alert("有两个.....");
						return false;
					}
				}
				else
				{
					//alert("最后一位是..." );
					return false;
				}
			}
			if(ch<'0'||ch>'9')	return false; 
		}

		return true;
}

// -->