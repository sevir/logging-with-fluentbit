import com.fasterxml.jackson.core.JsonProcessingException;
import com.fasterxml.jackson.databind.ObjectMapper;
import dk.tv2.election.backend.imports.Importer;
import java.util.logging.*

Logger logger = Logger.getLogger("")
Handler handler = new SocketHandler('127.0.0.1', 5170)
handler.setFormatter(new MyCustomFormatter())
logger.addHandler(handler)
logger.info ("I am a test info log")

private static class MyCustomFormatter extends Formatter {

    @Override
    public String format(LogRecord record) {
        
        ObjectMapper mapper = new ObjectMapper();
        String jsonInString = null;
        try {
            jsonInString = mapper.writeValueAsString(record);
        } catch (JsonProcessingException ex) {
            Logger.getLogger(Demo.class.getName()).log(Level.SEVERE, null, ex);
        }
        return jsonInString;
    }
}