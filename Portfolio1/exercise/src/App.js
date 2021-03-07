import React from 'react'
import './App.css';
import Duration from './components/DurationExercise'
import Repetition from './components/RepetitionExercise'



const MENU = "menu"
const DURATION = "duration"
const REPETITION = "repetition"


export default class MenuScreen extends React.Component {

  constructor(props) {
    super(props)
    this.state = {currentScreen: MENU, selectedItem: undefined}
  }
  render() {
    let objects = [
      {objName: "Running"},
      {objName: "Push Ups"},
     ]
    let screen 
    switch (this.state.currentScreen) {
      case MENU:
        screen = (
          <>
          <h1>WELCOME! CHOOSE A WORKOUT TO GET STARTED.</h1>
          <ul>
            {objects.map((obj) => (
              obj.objName == "Running" ?
              
              <li>
                <button onClick={() => this.setState({ currentScreen: DURATION,
                selectedItem: obj,
                })}>Running</button>
              </li>
              :
              <li>
                <button onClick={() => this.setState({ currentScreen: REPETITION,
                seletedItem: obj,
                })}>Push Ups</button>
              </li>
            ))}
            
          </ul>
          </>
        )
        break
      case DURATION:
        screen = (
          <>
          <Duration {...this.state.selectedItem}></Duration>
          <div class="container">
          <button onClick={() => this.setState({ currentScreen: MENU})}>
            Back
          </button>
          </div>
          </>
        )
        break
      case REPETITION:
        screen = (
          <>
          <Repetition {...this.state.seletedItem}></Repetition>
          <div class="container">
          <button onClick={() => this.setState({ currentScreen: MENU})}>
            Back
          </button>
          </div>
          </>
        )
        break
    }
    
    return screen
     
    
  }
}

