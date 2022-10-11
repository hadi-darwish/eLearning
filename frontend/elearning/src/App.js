import { useEffect, useState } from "react";
import { BrowserRouter } from "react-router-dom";
import Button from "./components/Button";
import Form from "./components/Form";
import Table from "./components/Table";
import TopBar from "./components/TopBar";

function App() {
  const [formOn, setFormOn] = useState(false);
  const [rows, setRows] = useState([]);

  useEffect(() => {
    rows[0] && console.log("Hello");
  }, [rows]);
  return (
    <>
      <div className="App">
        <TopBar />
        <div className="app-body">
          <div className="btn-container">
            <Button
              text={formOn ? "X" : "Add User"}
              onClick={() => setFormOn(!formOn)}
            />
          </div>
          <div className="btn-container"></div>
          {formOn && (
            <Form rows={rows} setRows={setRows} setFormOn={setFormOn} />
          )}
          <div className="table-container">
            <Table rows={rows} setRows={setRows} />
          </div>
        </div>
      </div>
      <style jsx>{`
        .App {
          max-width: 100vw;
          overflow: hidden;
        }
        .app-body {
          padding: 1rem;
        }
        .table-container {
          overflow: auto;
        }

        .btn-container {
          display: flex;
          justify-content: end;
          padding: 0.2rem;
        }
      `}</style>
    </>
  );
}

export default App;
