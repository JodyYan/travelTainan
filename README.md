# travelTainan
利用搜尋關鍵字方式搜出資料庫裡可能想要的資料

# api使用方式

**GET api/insert-json-file-to-database-table**

call api前先把檔案放進storage/app/public裡

RESPONSE：將json檔資料載進database

json檔的欄位："id", "lang", "name", "summary", "introduction", "open_time", "district", "address", "tel", "fax", "lat", "long", "services", "category", "update_time"

**GET api/travel**

REQUEST

{
 
	"address" : "關鍵字"
    
}

RESPONSE

{

  "current_page": 1, 
  
  "data": [], 
  
  "first_page_url": "http://127.0.0.1:8000/api/travel?address=%E4%B8%83%E8%82%A1&page=1", 
  
  "from": 1,
  
  "last_page": 4,
  
  "last_page_url": "http://127.0.0.1:8000/api/travel?address=%E4%B8%83%E8%82%A1&page=4",
  
  "next_page_url": "http://127.0.0.1:8000/api/travel?address=%E4%B8%83%E8%82%A1&page=2",
  
  "path": "http://127.0.0.1:8000/api/travel",
  
  "per_page": 5,
  
  "prev_page_url": null,
  
  "to": 5,
  
  "total": 20
  
}

※如果需要下一頁的資料就使用“next_page_url”的值，GET呼叫一次
